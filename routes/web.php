<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SilderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DBconnect;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;

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

Route::get('/', [HomeController::class, 'view'])->name('admin_name');
//===================================SIGN-IN =========================================================//
   $prefix = 'sign-in';
   $controllerName='sign-in';
   Route::group(['prefix' => $controllerName], function () {
       $controller = SigninController::class;
       Route::get('/', [$controller, 'view'])->name("sign-in_view");
   });
//===================================SIGN-UP =========================================================//
$prefix = 'login';
   $controllerName='sign-up';
   Route::group(['prefix' => $controllerName], function () {
       $controller = SignupController::class;
       Route::get('/', [$controller, 'view'])->name("sign-up_view");
   });
//===================================ADMIN =========================================================//
Route::group(['prefix' => $prefixAdmin], function () {

    Route::get('user', function () {

        return "/admin/user";
    });

    //================================ SLIDER ========================================================//
    $prefix = 'slider';
    $controllerName='slider';
    Route::group(['prefix' => $controllerName], function () {
        $controller = SilderController::class;
        Route::get('/', [$controller, 'view'])->name("slider_view");
        //DATABASE TEST
        Route::get('/users/{name}', [DBconnect::class,'show2'])->name("db_slider");
        //StatusCheck Method 
        Route::get('/change-status-{active}/{id}', [$controller,'status'])->where('id', '[0-9]+')->name('slider_status');
        //Edit and Add method 
        //if id==true => edit || id=="" => Add
        Route::get('/form/{id?}', [$controller, 'form'])->where('id', '[0-9]+')->name('slider_form');
        //Delete method
        Route::get('/delete/{id}', [$controller, 'delete'])->where('id', '[0-9]+')->name('slider_delete');
    });
    //================================ DASHBOARD ========================================================//

    $prefix = 'dashboard';
    $controllerName='dashboard';
    Route::group(['prefix' => $controllerName], function () use($prefix){
        $controller = DashboardController::class;
        Route::get('/', [$controller, 'view'])->name("dashboard_view");
    });

 
});
