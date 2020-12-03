<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel as MainModel;
use App\Models\ProductModel;
use Gloudemans\ShoppingCart\CartItem;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Category;
use Cart;
session_start();
class ProductController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';

     public function add_to_cart(Request $request)
     {
         $id_item=$request->id;
         $item=ProductModel::find($id_item)->first();
         $items_qty = CategoryModel::select('total')->where("cat_id", $item->cat_id)->first();
        $data['id']=$item->book_id;
        $data['qty']=1;
        $data['name']=$item->book_name;
        $data['price']=$item->price;
        $data['options']['image']=$item->img;
        $data['id']=$item->book_id;
        $data['weight']=25;
        Cart::add($data);
        return view('public.page.cart');
        
     }
     public function cart_view()
     {
         return view('public.page.cart');
     }
     
}
