<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SilderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DBconnect;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Models\ProductModel;
use App\Models\SlideModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





$prefixAdmin = Config::get('01.url.prefix_admin', 'error');

//Route::get('/', [HomeController::class, 'view'])->name('home_view');
//===================================SLIDER========================================================================//
         //===================================SLIDER-HOMEPAGE =========================================================//
         $controllerName="/";
         Route::group(['prefix' => $controllerName], function () {
            $controller = HomeController::class;
            Route::get('/', [$controller, 'view'])->name("home_view");
        });
//===================================LOG-IN ========================================================================//

        //===================================SIGN-IN =========================================================//

        $controllerName = 'sign-in';
        Route::group(['prefix' => $controllerName], function () {
            $controller = LoginController::class;
            Route::get('/', [$controller, 'signin_view'])->name("sign-in_view");
        });
        //===================================SIGN-UP =========================================================//

        $controllerName = 'sign-up';
        Route::group(['prefix' => $controllerName], function () {
            $controller = LoginController::class;
            Route::get('/', [$controller, 'signup_view'])->name("sign-up_view");
        });
//===================================HOME - PAGE ====================================================================//
        //======================================HOME - ABOUT ===================================================//


            $controllerName = 'about';
            Route::group(['prefix' => $controllerName], function () {
                $controller = HomeController::class;
                Route::get('/', [$controller, 'about_view'])->name("about_view");
            });
            //======================================HOME - FAQ ===============================================//

            $controllerName = 'faq';
            Route::group(['prefix' => $controllerName], function () {
                $controller = HomeController::class;
                Route::get('/', [$controller, 'faq_view'])->name("faq_view");
            });
            //======================================HOME - WISHLIST ====================================//

            $controllerName = 'wishlist';
            Route::group(['prefix' => $controllerName], function () {
                $controller = HomeController::class;
                Route::get('/', [$controller, 'wishlist_view'])->name("wishlist_view");
            });
            //======================================HOME - PRIVACY-POLICY ====================================//

            $controllerName = 'privacy-policy';
            Route::group(['prefix' => $controllerName], function () {
                $controller = HomeController::class;
                Route::get('/', [$controller, 'policy_view'])->name("privacy-policy_view");
            });
             //======================================HOME - TERMS CONDIIONS====================================//

             $controllerName = 'terms-conditions';
             Route::group(['prefix' => $controllerName], function () {
                 $controller = HomeController::class;
                 Route::get('/', [$controller, 'terms_view'])->name("terms_view");
             });
              //======================================HOME - ERROR 404====================================//

              $controllerName = 'error-404';
              Route::group(['prefix' => $controllerName], function () {
                  $controller = HomeController::class;
                  Route::get('/', [$controller, 'error_view'])->name("error_view");
              });
              //======================================HOME - CONTACT====================================//

              $controllerName = 'contact_us';
              Route::group(['prefix' => $controllerName], function () {
                  $controller = HomeController::class;
                  Route::get('/', [$controller, 'contact_view'])->name("contact_view");
              });
              //======================================HOME - TEAM ====================================//

              $controllerName = 'team';
              Route::group(['prefix' => $controllerName], function () {
                  $controller = HomeController::class;
                  Route::get('/', [$controller, 'team_view'])->name("team_view");
              });
                //======================================HOME - TEAM ====================================//

               $controllerName = 'wishlist';
               Route::group(['prefix' => $controllerName], function () {
                   $controller = HomeController::class;
                   Route::get('/', [$controller, 'wishlist_view'])->name("wishlist_view");
               });
//======================================HOME - CHECKOUT ====================================//

               $controllerName = 'checkout';
               Route::group(['prefix' => $controllerName], function () {
                   $controller = HomeController::class;
                   Route::get('/', [$controller, 'checkout_view'])->name("checkout_view");
               });
//======================================HOME - CART ====================================//

                $controllerName = 'cart';
                Route::group(['prefix' => $controllerName], function () {
                    $controller = HomeController::class;
                    Route::get('/', [$controller, 'cart_view'])->name("cart_view");
                });
//======================================HOME - BLOG ====================================//

$controllerName = 'blog';
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'blog_view'])->name("blog_view");
});
//======================================HOME - BLOG DETAIL ====================================//

$controllerName = 'blogdetail';
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'blogdetail_view'])->name("blogdetail_view");
});
//======================================HOME - PRODUCT ========================================================//

$controllerName = 'product';
Route::group(['prefix' => $controllerName], function () {
    $controller = ProductController::class;
    //KHI KHONG TRUYEN ID THI TRA VE SHOP VIEW 
    Route::get('/', [HomeController::class, 'shop_view']);
    //LAY ID  SAN PHAM KHI DUOC TRUYEN GIA TRI VAO 
    Route::get('/{id}',[$controller,'product_view'])->name("product_view");
});
//======================================HOME - LIST- PRODUCT ========================================================//

$controllerName = 'list-products';
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'listproduct_view'])->name("listproduct_view");
});
//======================================HOME - SHOP ========================================================//

$controllerName = 'shop';
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'shop_view'])->name("shop_view");
});
//======================================HOME - ACCOUNT ========================================================//

$controllerName = 'my-account';
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'account_view'])->name("account_view");
});
//===================================ADMIN ===========================================================================//
Route::group(['prefix' => $prefixAdmin], function () {

    Route::get('user', function () {

        return "/admin/user";
    });

    //================================ SLIDER ========================================================//
    $prefix = 'slider';
    $controllerName = 'slider';
    Route::group(['prefix' => $controllerName], function () {
        $controller = SilderController::class;
        Route::get('/', [$controller, 'view'])->name("slider_view");
        //DATABASE TEST
        Route::get('/users/{name}', [DBconnect::class, 'show2'])->name("db_slider");
        //StatusCheck Method 
        Route::get('/change-status-{active}/{id}', [$controller, 'status'])->where('id', '[0-9]+')->name('slider_status');
        //Edit and Add method 
        //if id==true => edit || id=="" => Add
        Route::get('/form/{id?}', [$controller, 'form'])->where('id', '[0-9]+')->name('slider_form');
        //Delete method
        Route::get('/delete/{id}', [$controller, 'delete'])->where('id', '[0-9]+')->name('slider_delete');
    });
    //================================ DASHBOARD ========================================================//

    $prefix = 'dashboard';
    $controllerName = 'dashboard';
    Route::group(['prefix' => $controllerName], function () use ($prefix) {
        $controller = DashboardController::class;
        Route::get('/', [$controller, 'view'])->name("dashboard_view");
    });
});
