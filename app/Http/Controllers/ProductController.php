<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Gloudemans\ShoppingCart\CartItem;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Category;
use Cart;
use Exception;

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
    public function add_cart_ajax(Request $request){
        $id_item = $request->book_id;
        $qty_item=$request->qty;
        try{
            $item = ProductModel::find($id_item);
            $data['id'] = $item->book_id;
            $data['qty'] = $qty_item;
            $data['name'] = $item->book_name;
            $data['price'] = $item->price;
            $data['options']['image'] = $item->img;
            $data['id'] = $item->book_id;
            $data['weight'] = 25;
            Cart::add($data);
        }
        catch(Exception $e){
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
}
