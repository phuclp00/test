<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Models\SlideModel as Slide;

class HomeController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';
    
    public function view()
    {  
        return view($this->pathViewController.'index',);
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
    public function product_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.single-product');
    }
    public function error_view()
    {
        return view($this->pathViewController.$this->subpatchViewController  .'.error404');
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
