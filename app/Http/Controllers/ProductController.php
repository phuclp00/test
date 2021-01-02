<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\BookThumbnailModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Gloudemans\ShoppingCart\CartItem;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Category;
use Cart;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

session_start();
class ProductController extends Controller
{

    public function add_to_cart(Request $request)
    {

        $id_item = $request->id;
        $item = ProductModel::find($id_item);
        $items_qty = CategoryModel::select('total')->where("cat_id", $item->cat_id)->first();
        $data['id'] = $item->book_id;
        $data['qty'] = 1;
        $data['name'] = $item->book_name;
        $data['price'] = $item->price;
        $data['options']['image'] = $item->img;
        $data['id'] = $item->book_id;
        $data['weight'] = 25;
        Cart::add($data);
        return \redirect()->back();
    }
    public function add_cart_ajax(Request $request)
    {
        $id_item = $request->book_id;
        $qty_item = $request->qty;
        try {
            $item = ProductModel::find($id_item);
            $data['id'] = $item->book_id;
            $data['qty'] = $qty_item;
            $data['name'] = $item->book_name;
            $data['price'] = $item->price;
            $data['options']['image'] = $item->img;
            $data['id'] = $item->book_id;
            $data['weight'] = 25;
            Cart::add($data);
        } catch (Exception $e) {
            return view('error');
        }
    }
    //UPDATE AND DESTROY
    public function update_cart(Request $request)
    {
        $rowId = $request->cart_rowId;
        $qty   = $request->cart_quantity;
        if (isset($request->remove_cart)) {
            Cart::update($rowId, 0);

            return redirect()->back();
        }
        if (isset($request->update_cart)) {

            Cart::update($rowId, $qty);
            return redirect('/cart/show-cart');
        }
    }
    public function cart_view()
    {
        return view('public.page.cart');
    }
    //Admin 

    public function book_add(ProductRequest  $request)
    {
        try {
            $data = new ProductModel();
            $thumb = new BookThumbnailModel();
            $file =  new FileuploadController();
            //Book insert
            $data->book_id = $request->book_id;
            $data->book_name = $request->book_name;
            $data->cat_id = $request->cat_id;
            $data->pub_id = $request->pub_id;
            $data->price = $request->price;
            $data->promotion_price = $request->promotion;
            $file_name = $request->img;
            $data->img = $file_name != null ? $data->book_id . "_" . $data->book_name . "." . $file_name->clientExtension() : null;
            //Thumb insert
            $ext_thumb = $request->thumb;
            if ($ext_thumb != null) {
                $i = 0;
                while ($i < 7) {
                    $tmp = $i + 1;
                    $thumb["thumbnail_" . $tmp] =  $data->book_id . "_thumb_$tmp" . "." . $ext_thumb[$i]->clientExtension();
                    $i++;
                }
            }

            //Insert on DB
            $check = $data->save();
            $check = $thumb->save();
            //Upload images
            if ($check == true) {
                //Book image upload
                if ($file_name != null)
                    $file->store($request->img, "books/$data->book_id", $data->book_id . "_" . $data->book_name);
                //Thumb image upload
                if ($ext_thumb != null) {
                    $tmp = 0;
                    while ($tmp < 7) {
                        $i = $tmp + 1;
                        $file->store($request->thumb["$tmp"], "books/$data->book_id", $data->book_id . "_thumb_$i");
                        $tmp++;
                    }
                }
            }
            $request->session()->flash('info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"">Upload thành công </div>');
            return \redirect()->back();
        } catch (QueryException $e) {
            $request->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                  ' . $e->getMessage() . '</div>');
            return \redirect()->back();
        }
    }
    public function book_edit(ProductRequest $request)
    {
        try {
            $data = ProductModel::find($request->book_id);
            $thumb = BookThumbnailModel::find($request->book_id);
            $file =  new FileuploadController();
            //Book update
            $data->book_name = $request->book_name;
            $data->cat_id = $request->cat_id;
            $data->pub_id = $request->pub_id;
            $data->price = $request->price;
            $data->promotion_price = $request->promotion;
            $file_name = $request->img != null ? $request->img : null;
            $ext_thumb = $request->thumb != null ? $request->thumb : null;

            if ($file_name != null && $ext_thumb != null) {
                //Update DB Img
                $data->img =  $data->book_id . "_" . $data->book_name . "." . $file_name->clientExtension();
                $i = 0;
                //Update DB Thumb
                while ($i < 7) {
                    $tmp = $i + 1;
                    $thumb["thumbnail_" . $tmp] =  $data->book_id . "_thumb_$tmp" . "." . $ext_thumb[$i]->clientExtension();
                    $i++;
                }
                //destroy folder
                $file->destroy("images", "books/" . $data->book_id);
            } elseif ($file_name != null) {
                $data->img =  $data->book_id . "_" . $data->book_name . "." . $file_name->clientExtension();
                //Book image destroy
                $file->destroy(null, null, "books/$data->book_id/$data->img");
            } elseif ($ext_thumb != null) {
                $i = 0;
                while ($i < 7) {
                    $tmp = $i + 1;
                    //Old thumb destroy 
                    $file->destroy(null, null, "images/books/$data->book_id/" . $thumb['thumbnail_' . $tmp]);
                    //Add new thumb 
                    $thumb["thumbnail_" . $tmp] =  $data->book_id . "_thumb_$tmp" . "." . $ext_thumb[$i]->clientExtension();
                    $i++;
                }
            }
            $check = $data->save();
            $check = $thumb->save();

            //Upload images
            if ($check == true) {
                //Book image update
                if ($file_name != null)
                    $file->store($request->img, "books/$data->book_id", $data->book_id . "_" . $data->book_name);
                //Thumbnail  update
                if ($ext_thumb != null) {
                    $tmp = 0;
                    while ($tmp < 7) {
                        $i = $tmp + 1;
                        $file->store($request->thumb["$tmp"], "books/$data->book_id", $data->book_id . "_thumb_$i");
                        $tmp++;
                    }
                }
            }
            $request->session()->flash('info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"">Upload thành công </div>');
            return \redirect()->back();
        } catch (QueryException $e) {
            $request->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                  ' . $e->getMessage() . '</div>');
            return \redirect()->back();
        }
    }
}
