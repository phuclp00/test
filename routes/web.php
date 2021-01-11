<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SilderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DBconnect;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\PublisherModel;
use App\Models\Show_info_user;
use App\Models\SlideModel;
use App\Models\User;
use App\Models\UserModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
$controllerName = "/";
Route::group(['prefix' => $controllerName], function () {
    $controller = HomeController::class;
    Route::get('/', [$controller, 'view'])->name("home_view");
    //Khong dung
    // SHOW THONG TIN TAI TRANG CHU 

});
Route::get('#productmodal', [HomeController::class, 'get_info'])->name('get_info_home');
//===================================LOG-IN ========================================================================//
$controllerName = 'login';
Route::group(['prefix' => $controllerName], function () {
    $controller = LoginController::class;
    Route::get('/', [$controller, 'show_login'])->name("show_login");
    Route::get('/sign-in', [$controller, 'Login'])->name("login_signin");
    Route::get('/sign-up', [$controller, 'Register'])->name("login_signup");
    Route::get('/log-out', [$controller, 'log_out'])->name("log_out");
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
    $controller = ProductController::class;
    Route::get('wishlist_add={id}', [$controller, 'add_wishlist'])->name("add_wishlist");
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

$controllerName = 'contact';
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
    Route::get('/check-out-product', [$controller, 'checkout_view'])->name("checkout_view");
    Route::get('/check-out-order', [$controller, 'add_order_cart'])->name("add_order_cart");
    Route::get('/check-out-order-detail', [$controller, 'add_order_detail'])->name("add_order_detail");
    Route::get('/check-out-register-address', [LoginController::class, 'register_address'])->name("register_address");
});
//======================================HOME - CART ====================================//

$controllerName = 'cart';
Route::group(['prefix' => $controllerName], function () {
    $controller = ProductController::class;
    Route::get('/add-to-cart/{id}', [$controller, 'add_to_cart'])->name("add_to_cart");
    Route::post('/add-to-cart-special', [$controller, 'add_cart_ajax'])->name("add_to_cart_ajax");
    Route::get('/update-cart', [$controller, 'update_cart'])->name("update_cart");
    Route::get('/show-cart', [$controller, 'cart_view'])->name("cart_view");
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
//====================================== - PRODUCT ========================================================//

$controllerName = 'product';
Route::group(['prefix' => $controllerName], function () {
    $controller = ProductController::class;
    //KHI KHONG TRUYEN ID THI TRA VE SHOP VIEW 
    Route::get('/', [HomeController::class, 'shop_view']);

    //LAY ID VA CAT_ID SAN PHAM KHI DUOC TRUYEN GIA TRI VAO TRA VE TRANG PRODUCT DETAIL
    Route::get('/book_id={id} && cat_id={cat_id?}', [HomeController::class, 'get_items'])->name("product_view");
});
$controllerName = 'my-account';
//====================================== - ACCOUNT PROFILE ========================================================//
Route::group(['prefix' => $controllerName], function () {
    $controller = UserController::class;
    Route::POST('/img_change/{user_name}', [$controller, 'update_img'])->name("update_img");
    Route::get('/account_view/{user_name}', [$controller, 'account_view'])->name("account_view");
    Route::post('/account-update/{user_name}', [$controller, 'account_update'])->name("account_update");
});
//====================================== - SHOP ========================================================//

$controllerName = 'shop';
Route::group(['prefix' => $controllerName], function () {
    $controller = CategoryController::class;
    Route::get('/', [HomeController::class, 'shop_view'])->name("shop_view", ["get_cat_items" => $get_cat_items = null]);
    //LAY ID CATEGORY KHI DUOC TRUYEN GIA TRI VAO TRA VE LIST THEO ID CATEGORY
    Route::get('/cat_id={cat_id}', [HomeController::class, 'get_category'])->name("category_view");
    Route::get('/search_product}', [CategoryController::class, 'find_product'])->name("find_product");
});
//====================================== - ACCOUNT ========================================================//


//===================================ADMIN ===========================================================================//
Route::group(['prefix' => 'admin'], function () {

    //================================ ADMIN AUTH ================================================================//

    Route::get('/', [LoginController::class, 'admin_auth'])->name('admin_author');
    Route::get('/', [HomeController::class, 'dash_view'])->name('index');
    
    //================================ LOGIN ADMIN================================================================//

    Route::get('login',[HomeController::class,'login_view'])->name('admin_login_view');
    Route::get('register',[HomeController::class,'register_view'])->name('admin_register_view');

    Route::get('logout',[LoginController::class,'admin_logout'])->name('admin_logout');
    Route::post('/login-admin', [LoginController::class, 'admin_login'])->name('admin_login');
    Route::post('/register-admin', [LoginController::class, 'admin_register'])->name('admin_register');


        //Dash board
        Route::get('/dashboard', [HomeController::class, 'dash_view'])->name('admin.dash_view');

        //==========================================Category==============================================================
        Route::get('/category', [HomeController::class, 'category_view'])->name('admin.category_view');
        //Category add view 
        Route::get('/category-view-add', [HomeController::class, 'category_add_view'])->name('admin.add-category_view');
        //Category add 
        Route::get('/category-add', [CategoryController::class, 'add_category'])->name('admin.add_category');
        //Category edit view
        Route::get('/category-edit-view/{cat_id}', [HomeController::class, 'category_edit_view'])->name('admin.edit_category_view');
        //Category edit 
        Route::get('/category-edit/{cat_id}', [CategoryController::class, 'category_edit'])->name('admin.edit_category');
        //Category delete 
        Route::get('/category-delete/{cat_id}', [CategoryController::class, 'category_delete'])->name('admin.delete_category');

        //==========================================Book list==============================================================
        Route::get('/book-list', [HomeController::class, 'book_list_view'])->name('admin.book_list_view');
        //Book add view
        Route::get('/book-add-view', [HomeController::class, 'book_list_add_view'])->name('admin.add_book_view');
        //Book add
        Route::post('/book-add', [ProductController::class, 'book_add'])->name('admin.add_book');
        //Book edit view
        Route::get('/book-edit-view/{book_id}', [HomeController::class, 'book_edit_view'])->name('admin.edit_book_view');
        //Book edit
        Route::post('/book-edit', [ProductController::class, 'book_edit'])->name('admin.edit_book');
        //Book delete 
        Route::get('/book-delete/book_id={book_id}', [ProductController::class, 'book_delete'])->name('admin.book_delete');

        //==========================================Publisher=============================================================
        Route::get('/publisher', [HomeController::class, 'publisher_view'])->name('admin.publisher_view');
        //Publisher-add view
        Route::get('publisher-add-view', [HomeController::class, 'add_publisher_view'])->name('admin.add_publisher_view');
        //Publisher-add
        Route::post('publisher-add', [PublisherController::class, 'add_publisher'])->name('admin.add_publisher');
        //Publisher-edit view
        Route::get('publisher-edit-view/{pub_id}', [HomeController::class, 'edit_publisher_view'])->name('admin.edit_publisher_view');
        //Publisher edit
        Route::post('publisher-edit/{pub_id}', [PublisherController::class, 'edit_publisher'])->name('admin.edit_publisher');
        //Publisher delete
        Route::get('publisher-delete/{pub_id}', [PublisherController::class, 'delete_publisher'])->name('admin.delete_publisher');


        //================================ MANAGER USER================================================================//
        // User list view
        Route::get('user-list', [HomeController::class, 'user_list_view'])->name('admin.user_list_view');
        // User add view
        Route::get('add-user', [HomeController::class, 'add_user'])->name('admin.add_user');


        //================================ SLIDER ====================================================================//
});


//================================ UPLOAD_ FILE ========================================================//
Route::post('fileupload', [FileuploadController::class, 'store'])->name('fileupload.store');
//================================ AJAX - POST REQUEST =================================================//
Route::post('item', function ($request) {
});
