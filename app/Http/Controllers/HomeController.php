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
use App\Cart;
use App\Models\PublisherModel;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    private $subpatchViewController = '.page';
    private $pathViewController = 'public.';
    public function __construct()
    {
        $slide_items = (new SilderController)->slide_homepage();
        $list_items_product = (new ShopController)->all_list_view();
        $list_items_categoy = (new CategoryController)->list_category();
        $top_item_category = (new CategoryController)->top_list_category();

        $pagi_list_product = (new ShopController)->paginate_list_view();

        //$list_get_category=(new CategoryController)->get_category();
       
    }
    // FRONT-END
    public function view_Admin(){
        $this->middleware('auth');
    }
    public function view()
    {
        return view('public.index');
    }
    public function index()
    {
        return view($this->pathViewController .'index');
    }
    public function about_view()
    {
        return view($this->pathViewController . $this->subpatchViewController . '.about');
    }
    public function faq_view()
    {
        return view($this->pathViewController . $this->subpatchViewController . '.faq');
    }
    public function policy_view()
    {
        return view($this->pathViewController . $this->subpatchViewController . '.privacy-policy');
    }
    public function shipping_view()
    {
        return view($this->pathViewController . $this->subpatchViewController . '.shipping');
    }
    public function terms_view()
    {
        return view($this->pathViewController . $this->subpatchViewController . '.terms-conditions');
    }
    public function shop_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.shop');
    }
    public function get_list_id(Request $request)
    {
        $items = $request->id;
        $items = ProductModel::with('category')->where("cat_id", "=", $items);
        view()->share('get_cat_items', $items);
    }
    // Quick View chua xu ly duoc 
    public function get_info(Request $request)
    {
        $id_book = $request->id;
        $item = ProductModel::where("book_id", $id_book)->get();
        // Fetch all records
        view()->share("info_book", $item);
    }
    public function get_category(Request $request)
    {
        $id = $request->cat_id;
        $mainModel = new CategoryModel();

        //Truy xuat theo dieu kien trong Model()

        //$items=$mainModel->listItems("cat_id",['task'=>"special-list-items"],$id,"===");

        //Truy xuat theo relationship
        $items = ProductModel::with('category')->where("cat_id", "=", $id)->paginate(6);

        return view($this->pathViewController . $this->subpatchViewController  . '.shop', ["get_cat_items" => $items]);
    }
    public function get_items(Request $request)
    {
        $id = $request->id;
        $cat_id = $request->cat_id;
        $mainModel = new ProductModel();
        $total = new CategoryModel();
        //Truy xuat dieu kien trong Model()
        //$items=$mainModel->all_list_items("book_id",['task'=>"special-list-items"],"=",$id);
        $total = $total::select('total')->where('cat_id', $cat_id)->first();
        // Truy xuat theo relationship
        $items = $mainModel::where("book_id", $id)->get();
        $items_relate = $mainModel::where("cat_id", $items)->paginate(3);

        $items_thumb = $mainModel::select('thumb')->where("book_id", $id)->first();
        $items_thumb->toArray();
        $result = explode(";", $items_thumb->thumb);
        //$items=  
        //$total_items= \App\Models\CategoryModel::with('book')->where("cat_id","=",$cat_id);

        return view($this->pathViewController . $this->subpatchViewController . '.single-product', [
            "get_singel_product" => $items,
            "total_items" => $total->total,
            "items_relate" => $items_relate,
            "item_thumb" => $result
        ]);
    }
    public function product_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.single-product');
    }
    public function error_view()
    {
        return view('errors.error404');
    }
    public function contact_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.contact');
    }
    public function team_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.team');
    }
    public function wishlist_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.wishlist');
    }
    public function checkout_view()
    {
        if(session()->has('user_info')){
           return view($this->pathViewController . $this->subpatchViewController  . '.checkout');
        }
        else{
            return view('public.page.my-account');
        }
    }

    public function blog_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.blog');
    }
    public function blogdetail_view()
    {
        return view($this->pathViewController . $this->subpatchViewController  . '.blog-details');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // BACK-END
    
    public function admin_login(){
        return view('admin.index');
    }
    public function dash_view(){
        return view('admin.layout.admin-dashboard');
    }
    //Category
    public function category_view(){
        $result=CategoryModel::all();
        return view('admin.layout.admin-category',['cat_list'=>$result]);
    }
    public function category_add_view(){
        return view('admin.layout.add.admin-add-category');
    }
     public function category_edit_view(Request $request){
        $result=CategoryModel::find($request->cat_id);
        return view('admin.layout.add.admin-add-category',['category'=>$result]);
    }
    //Book
    public function book_list_view(){
        return view('admin.layout.admin-books');
    }
     public function book_list_add_view(Request $request){
         $resullt=ProductModel::find($request->book_id);
        return view('admin.layout.add.admin-add-book',['book',$resullt]);
    }
    //Publisher 
    public function publisher_view(){
        $result=PublisherModel::all();
        return view('admin.layout.admin-publisher',['pub_list'=>$result]);
    }
    public function add_publisher_view(){
        return view('admin.layout.add.admin-add-publisher');
    }
    public function edit_publisher_view(Request $request){
        $result=PublisherModel::find($request->pub_id);
        return view('admin.layout.edit.admin-edit-publisher',['publisher'=>$result]);
    }
    //User
    public function user_list_view()
    {
        return view('admin.layout.admin-user-list');
    }
    public function add_user()
    {
        return view('admin.layout.add.add-user');
    }
}

