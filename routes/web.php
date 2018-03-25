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

Route::get('/', 'HomeController@homepage');

Auth::routes();

Route::get('home', 'HomeController@homepage')->name('home');

// smartphone entry

Route::get('smartphones/entry', 'PagesController@s_entry')->name('s_entry')->middleware('only_admin_entry');

Route::post('smartphones/entry', 'S_EntryController@s_submit')->name('s_submit');

Route::get('smartphones/entry_success', 'PagesController@entry_success');

Route::get('smartphones/images', 'PagesController@smartphones');

// laptops entry

Route::get('laptops/entry', 'PagesController@l_entry')->name('l_entry')->middleware('only_admin_entry');

Route::post('laptops/entry', 'L_EntryController@l_submit')->name('l_submit');

Route::get('laptops/entry_success', 'PagesController@entry_success');

// earphones entry

Route::get('earphones/entry', 'PagesController@e_entry')->name('e_entry')->middleware('only_admin_entry');

Route::post('earphones/entry', 'E_EntryController@e_submit')->name('e_submit');

Route::get('earphones/entry_success', 'PagesController@entry_success');

// products

Route::get('smartphones/{slug}', 'ProductsController@smartphones')->name('smartphones');

Route::get('laptops/{slug}', 'ProductsController@laptops')->name('laptops');

Route::get('earphones/{slug}', 'ProductsController@earphones')->name('earphones');

// cart

Route::get('cart/add/{id}', 'CartController@add_product')->name('add_product');

Route::get('cart', 'CartController@display_cart')->name('display_cart');

Route::get('cart/remove/{id}', 'CartController@remove_product')->name('remove_product');
