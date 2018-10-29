<?php

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

// Route::get('Admin-cp', 'Client\HomeController@AdminCp')->name('Admin.cp');


Route::get('login', 'Auth\LoginController@Login')->name('login');
Route::post('login', 'Auth\LoginController@PostLogin');
Route::any('logout', 'Auth\LoginController@Logout')->name('logout');



//Quan-tri-vien

//Admin
Route::group(['middleware' => ['auth', 'author.role:1, 0'], 'prefix' => 'Admin-cp'], function(){
	Route::get('', 'Client\HomeController@AdminCp')->name('Admin.cp');
	Route::get('danh-muc', 'Client\CategoriController@ShowCate')->name('show.cate');
	Route::get('shop-list', 'Client\ShopController@ShopList')->name('shop.list');
	Route::get('san-pham', 'Client\ProductController@ShowProduct')->name('show.product');
	Route::get('{shopfood_slug}/san-pham', 'Client\ProductController@ShowListPr')->name('show.listpr');
	Route::get('tai-khoan-admin', 'Client\UserController@ShowUser')->name('show.userAdmin');
	Route::get('tai-khoan-member', 'Client\UserController@ShowMember')->name('show.member');
	Route::get('xoa-shop', 'Client\ShopController@removeShop');
});

//ajax active
Route::group(['middleware' => ['auth', 'author.role:1, 0'], 'prefix' => 'Admin-cp'], function (){
    Route::get('save-active', 'Client\HomeController@SaveActive');
    Route::get('san-pham/save-active', 'Client\HomeController@SaveActiveProduct');
    Route::get('{shopfood_slug}/san-pham/save-active', 'Client\HomeController@SaveActiveProduct');
    Route::get('tai-khoan-member/save-active', 'Client\UserController@SaveActiveUser');
    Route::get('tai-khoan-admin/save-active', 'Client\UserController@SaveActiveAdmin');
    Route::get('danh-muc/save-active', 'Client\CategoriController@SaveActionCate');
    Route::get('shop-list/save-active', 'Client\ShopController@shopListActive');
});
// Add-Update-Delete
Route::group(['middleware' => ['auth', 'author.role:1, 0'], 'prefix' => 'Admin-cp/danh-muc'], function(){
    Route::get('them', 'Client\CategoriController@addCate')->name('add.cate');
    Route::get('sua/{id}', 'Client\CategoriController@updateCate')->name('update.cate');
    Route::post('save', 'Client\CategoriController@saveCate')->name('save.cate');
    Route::post('save-update', 'Client\CategoriController@saveUpdateCate')->name('save.cate.update');
    Route::get('xoa-cate', 'Client\CategoriController@removeCate');
});
// remove prduct
Route::group(['middleware' => ['auth', 'author.role:1, 0'], 'prefix' => 'Admin-cp'], function(){
    Route::get('san-pham/xoa-san-pham', 'Client\ProductController@removeProduct');
    Route::get('{shopfood_slug}/san-pham/xoa-san-pham', 'Client\ProductController@removeProduct');
});

//user
Route::group(['middleware' => ['auth', 'author.role:1, 0'], 'prefix' => 'Admin-cp'], function () {
     Route::get('xoa-tai-khoan', 'Client\UserController@removeUser');
});

//End Quan-tri-vien


// shop
Route::group(['middleware' => ['auth', 'author.role:2, 0'], 'prefix' => 'Admin-shop'], function (){
    Route::get('', 'Client\HomeController@AdminShop')->name('Admin.shop');
});

// wiews
Route::get('/', 'Client\HomeController@ViewShow')->name('view.show');
