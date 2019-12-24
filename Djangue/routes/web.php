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

Route::get("/home","HomeController@home")->name('home');
Route::get("/","HomeController@index")->name('home');
Route::get("/cours","HomeController@cours")->name('cours');
Route::get("/course_details.html","HomeController@detailscours")->name('detailscours');
Route::get("/elements.html","HomeController@elements")->name('elements');
Route::get("/blog_html","HomeController@blog")->name('blog');
Route::get("/single-blog_html","HomeController@single")->name('single');
Route::get("/about_html","HomeController@about")->name('about');
Route::get("/contact_html","HomeController@contact")->name('contact');


Route::resource('/product', 'ProductsController@index');

Route::get("/product","ProductsController@home");
Route::get("/cours/create","ProductsController@create");
Route::post("/cours/create","ProductsController@store");
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');
Route::patch("/product/edit/{id}", "ProductsController@update")->name('update_produit');
Route::view("/Accueil","products.create");

Route::get('/admin', function(){
 return view('admin.dashboard');

Routes::group(['middleware' => ['auth','admin'
]], function () {
});


Auth::routes();


