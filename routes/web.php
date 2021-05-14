<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Sweetalert message
// Route::get('my-notification/{type}', 'SweetalertController@myNotification');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//GOOGLE LOGIN
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

//FACEBOOK LOGIN
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('callback/facebook', 'Auth\FacebookController@handleFacebookCallback'); 

//PAYPAL ROUTES
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));

//PAYTM ROUTES



//ADMIN CONTROLLER
Route::get('/admin_','AdminController@index');
Route::post('/admin/auth','AdminController@auth')->name('admin.auth');

//CATEGORY CONTROLLER
Route::group(['middleware'=>'admin_auth'],function(){

Route::get('/dashboard','AdminController@dashboard');
Route::get('admin/category/add_category','CategoryController@index');
Route::post('admin/category/add_category','CategoryController@inserted');
Route::get('admin/category/manage_category','CategoryController@display');
Route::get('category/manage_category/view/{id}','CategoryController@view');
Route::get('category/manage_category/edit/{id}','CategoryController@edit');
Route::post('category/manage_category/update','CategoryController@update');
Route::get('category/manage_category/delete/{id}','CategoryController@delete');

//PRODUCT CONTROLLER
Route::get('admin/product','ProductController@index');
Route::post('product/save','ProductController@inserted');
Route::get('admin/manage_product','ProductController@display');
Route::get('manage_product/view/{id}','ProductController@view');
Route::get('manage_product/edit/{id}','ProductController@edit');
Route::post('manage_product/update','ProductController@update');
Route::get('manage_product/delete/{id}','ProductController@delete');

//PRODUCT CONTROLLER
Route::get('admin/coupon','CouponController@index');
Route::post('/save/coupon','CouponController@inserted');
Route::get('admin/manage_coupon','CouponController@display');
Route::get('manage_coupon/view/{id}','CouponController@view');
Route::get('manage_coupon/edit/{id}','CouponController@edit');
Route::post('manage_coupon/update','CouponController@update');
Route::get('manage_coupon/delete/{id}','CouponController@delete');

//PRODUCT CONTROLLER
Route::get('admin/banner','BannerController@index');
Route::post('/save','BannerController@inserted');
Route::get('admin/manage_banner','BannerController@display');
Route::get('manage_banner/view/{id}','BannerController@view');
Route::get('manage_banner/edit/{id}','BannerController@edit');
Route::post('manage_banner/update','BannerController@update');
Route::get('manage_banner/delete/{id}','BannerController@delete');

//Order Controller
Route::get('/orders','OrderController@display');
Route::get('/orders/invoice','OrderController@invoice');
Route::get('/invoice-print','OrderController@invoicePrint');

Route::get('admin/logout',function(){
    	session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error','Logout Successfully!!!');
        return redirect('admin_');

    });
});

//FRONT CONTROLLER
Route::get('/','FrontController@index');


Route::group(['middleware'=>'front_auth'],function(){

//CHECKOUT PAGE




    });


Route::get('/checkout','FrontController@checkout');
Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');

//PLACE ORDER
Route::post('/place_order','FrontController@placeOrder');
Route::get('/thanks','FrontController@orderConfirm');
//LOGIN/REGISTER ROUTES
Route::get('/login_page','UserController@login');
Route::post('/login_user','UserController@doLogin')->name('front.dologin');
Route::get('/logout_user','UserController@userlogout');
Route::get('/register_page','UserController@register');
Route::post('/registering_user','UserController@doRegister');
Route::get('/verify','UserController@verifyUser')->name('verify.user');
Route::post('/change-password','UserController@updatePassword');

//USER ACCCOUNT ROUTES
Route::get('/User-account','FrontController@userAccount');
Route::get('/edit-address','FrontController@editAddress');
Route::get('/getOrderDetails','FrontController@pdf');

//ADD TO CART
Route::post('/addtocart','FrontController@addtocart');
Route::get('/cart','FrontController@cart');
Route::get('/cart/delete/{id}','FrontController@deletecart');

//PRODUCT DETAIL PAGE ROUTE
Route::get('product-detail/{id}','FrontController@productdetail');

//CONTACT US PAGE
Route::get('/contact-us','FrontController@contactus');

//ABOUT US PAGE
Route::get('/about','FrontController@about');

Route::get('/forget_password', 'ForgotPasswordController@getEmail');
Route::post('/forget_password', 'ForgotPasswordController@postEmail');

Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

Route::get('/clear', function() { 
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear'); 
        return "Cleared!"; 
    });

//  PAYTM METHOD ROUTES
Route::post('/paytm-callback', 'FrontController@paytmCallback');