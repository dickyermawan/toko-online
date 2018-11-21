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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/helo/aku', function() {
    return 'Hello World';
});

Route::get('/product/display', 'ProductController@showAll');
Route::get('/product/save', 'ProductController@saveNew');

Route::get("/pintu-masuk", 'TestController@pintuMasuk');
Route::get("/show", 'TestController@show');


//Belajar Route
Route::get('/product', 'ProductController@index');
Route::match(['get', 'put', 'patch'],'/product/match', 'ProductController@match');
//named route
Route::any('/product/{id}/{id_lagi}', 'ProductController@any')->name('tes_any');

Route::group(["prefix" => "/products"], function () {
    Route::get("/all", "ProductController@all");
    Route::get("/bag", "ProductController@bag");
    Route::get("/latest", "ProductController@latest");
    Route::get("/discounts", "ProductController@discounts");
});

Route::group(["prefix" => "admin", "middleware" => "mustAdmin"], function () {
    Route::get("/dashboard", "DashboardController@index");
    Route::get("/orders", "DashboardController@index");
    // definisi route lainnya di sini
});
//route ke view tanpa lewat controller
Route::view("/path", "nama.view");// nama => folder, view => file di dalamnya


Route::get('show-all-items', 'ItemController@showAllItems');



// Route::get("/categories", "CategoryController@index");

// Route::get("/categories/create", "CategoryController@create");
// Route::post("/categories", "CategoryController@store");

// Route::get("/categories/{id}", "CategoryController@show");

// Route::get("/categories/{id}/edit", "CategoryController@edit");
// Route::put("/categories/{id}", "CategoryController@update");

// Route::delete("/categories/{id}", "CategoryController@destroy");

// ini cara cepat utk buat route resource dari pd cara di atas 
Route::resource('categories', 'CategoryController');

Route::get('search', 'ProductController@search');
