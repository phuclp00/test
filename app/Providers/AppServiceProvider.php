<?php

namespace App\Providers;

use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\ServiceProvider;
use Request;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        
        $db_book = DB::table('book')->select('*')->get();
        $users = DB::table('book')->paginate(10);
        $list_book=json_decode($db_book,true);
        view()->share('list_book', $list_book);
        */
      
        view()->composer('public.page.slide.menu_header',function($view)
        {
            if(Session('cart')){
                $oldCart =FacadesSession::get('cart');
                $cart= new Cart($oldCart);     
                $view->with(['cart'=>FacadesSession::get('cart'),'product_cart'=>$cart->item,
                'total_price'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]); 
            }
        });
        Schema::defaultStringLength(255);

    }
}
