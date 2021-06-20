<?php

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
Route::group(['namespace'=>'Home'],function (){
Route::get('/','HomeController@getindex');

Route::get('/trang_chu','HomeController@getindex');

Route::get('/loai_sanpham/{id}','HomeController@getloaisanpham');

Route::get('/chitiet_sanpham/{id}','HomeController@getchitietsanpham');

Route::get('/gioi_thieu','HomeController@getgioithieu');

Route::get('/lien_he','HomeController@getlienhe');

Route::get('add-to-cart/{id}','HomeController@addToCart');
Route::get('show-cart','HomeController@showCart');
Route::get('update-to-cart','HomeController@updateToCart');
Route::get('delete-cart','HomeController@deleteCart');

Route::get('check-out','HomeController@Checkout');

Route::post('dathang','HomeController@postCheckout');

Route::get('loginaa','HomeController@login');

Route::post('loginaaa','HomeController@postlogin');

Route::get('logout','HomeController@getlogouta');



});



Route::group(['namespace'=>'Admin'],function (){
Route::prefix('login')->group(function () {
    Route::get('/','LoginController@getLogin');
    Route::post('/','LoginController@postLogin'); 
});

Route::get('logout','HomeController@logout');


Route::prefix('admin')->group(function () {
    Route::get('/','HomeController@index');

Route::prefix('category')->group(function(){
    Route::get('/','CategoryController@getCategory');

    Route::get('add_category','CategoryController@getAddCategory');
    Route::post('add_category','CategoryController@postAddCategory');

    Route::get('edit_category/{id}','CategoryController@getEditCategory');
    Route::post('edit_category/{id}','CategoryController@postEditCategory');

    Route::get('delete/{id}','CategoryController@delete');
   

});
Route::prefix('product')->group(function(){
    Route::get('/','ProductController@getProduct');

    Route::get('add_product','ProductController@getAddProduct');
    Route::post('add_product','ProductController@postAddProduct');

    Route::get('edit_product/{id}','ProductController@getEditProduct');
    Route::post('edit_product/{id}','ProductController@postEditProduct');

    Route::get('delete/{id}','ProductController@delete');
   
    
});
Route::prefix('oder')->group(function(){
    Route::get('/','CheckOutController@getCheckOut');
     Route::get('view_oder/{id}','CheckOutController@getViewOder');

     Route::get('delete/{id}','CheckOutController@delete');

     Route::get('proc/{id}','CheckOutController@processed');

     Route::get('proces','CheckOutController@getprocessed');



});
});
});
