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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('home', 'PagesController@home')->name('home');

// smartphone entry

Route::get('smartphones/entry', 'PagesController@s_entry')->name('s_entry')->middleware('only_admin_entry');

Route::post('smartphones/entry', 'EntryController@s_submit')->name('s_submit');

Route::get('smartphones/entry_success', 'PagesController@entry_success');

// laptops entry

Route::get('laptops/entry', 'PagesController@entry')->name('l_entry')->middleware('only_admin_entry');

Route::post('laptops/entry', 'L_EntryController@submit')->name('l_submit');

Route::get('laptops/entry_success', 'PagesController@entry_success');


// products

Route::get('smartphones/{slug}', 'ProductsController@smartphones')->name('smartphones');

// cart

Route::get('cart/add/{id}', 'CartController@add_product')->name('add_product');

Route::get('cart', 'CartController@display_cart')->name('display_cart');

Route::get('cart/remove/{id}', 'CartController@remove_product')->name('remove_product');
