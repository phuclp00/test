<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel as MainModel;
use App\Models\ProductModel;
use Cart;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Category;

class ProductController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';
   
    
    public function delete(Request $request)
    {
        $id = $request->id;
        return view('public.test', ['id' => $id]);
    }
    public function index(){
        \redirect("page.index");
     }
     public function add_wishlist(Request $request,$id)
     {
         $id_item=$request->id;
         $item=ProductModel::find($id_item);
         $oldcart = Session('cart')?FacadesSession::get('key'):null;
         $cart= new Cart($oldcart);
         $cart->add($item,$id);
         $request->session()->put('cart',$cart);
         return \redirect()->back();
        
     }
     
}
