<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Http\Controllers\SilderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class HomeController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';
    public function __construct() {
        $slide_items=(new SilderController)->slide_homepage();
        $list_items_product= (new ShopController)->all_list_view();
        $list_items_categoy=(new CategoryController)->list_category();
        $top_item_category=(new CategoryController)->top_list_category();
        $admin_list=(new UserController)->all_list_view();
        $pagi_list_product=(new ShopController  )->paginate_list_view();
       
        //$list_get_category=(new CategoryController)->get_category();
        
    }
    public function view()
    {     
       return view($this->pathViewController.'index');
    }
    public function about_view()
    {
        return view($this->pathViewController.$this->subpatchViewController . '.about');
    }
    public function faq_view()
    {
        return view($this->pathViewController .$this->subpatchViewController. '.faq');
    }
    public function policy_view()
    {
        return view($this->pathViewController .$this->subpatchViewController. '.privacy-policy');
    }
    public function shipping_view()
    {
        return view($this->pathViewController .$this->subpatchViewController. '.shipping');
    }
    public function terms_view()
    {
        return view($this->pathViewController .$this->subpatchViewController. '.terms-conditions');
    }
    public function shop_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.shop');
    }
    public function get_list_id(Request $request)
   {
       $items=$request->id;
       $items= \App\Models\ProductModel::with('category')->where("cat_id","=",$items);
       view()->share('get_cat_items', $items);
   }
    public function get_category(Request $request)
    {
        $id=$request->cat_id;
        $mainModel= new CategoryModel();

        //Truy xuat theo dieu kien trong Model()

        //$items=$mainModel->listItems("cat_id",['task'=>"special-list-items"],$id,"===");
    
        //Truy xuat theo relationship
        $items= \App\Models\ProductModel::with('category')->where("cat_id","=",$id)->paginate(6);
        
        return view($this->pathViewController.$this->subpatchViewController  .'.shop',["get_cat_items"=>$items]);
    }
    public function get_items(Request $request)
    {
        $id=$request->id; 
        $cat_id=$request->cat_id;
        $mainModel= new ProductModel();
        $total= new CategoryModel();
        //Truy xuat dieu kien trong Model()
        $items=$mainModel->all_list_items("book_id",['task'=>"special-list-items"],"=",$id);
        $total=$total->listItems("cat_id",['task'=>"special-list-items","=",$cat_id]);
        // Truy xuat theo relationship
        //$items= \App\Models\ProductModel::with('category')->where("cat_id","=",$id)->get();  
       //$total_items= \App\Models\CategoryModel::with('book')->where("cat_id","=",$cat_id);
     
        return view($this->pathViewController.$this->subpatchViewController .'.single-product',["get_singel_product"=>$items,"total_items"=>$total]);
    }
    public function product_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.single-product');
    }
    public function error_view()
    {
        return view('errors.error404');
    }
    public function contact_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.contact');
    }
    public function team_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.team');
    }
    public function wishlist_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.wishlist');
    }
    public function checkout_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.checkout');
    }
    public function cart_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.cart');
    }
    public function blog_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.blog');
    }
    public function blogdetail_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.blog-details');
    }
    public function account_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.my-account');
    }
}
