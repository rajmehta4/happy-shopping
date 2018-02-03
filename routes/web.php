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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('smartphones/entry', 'EntryController@s_entry')->name('s_entry')->middleware('entry');

Route::post('smartphones/entry', 'EntryController@s_submit')->name('s_submit');

Route::get('smartphones/entry_success', 'EntryController@s_entry_success')->name('s_entry_success');

Route::get('smartphones/{slug}', 'ProductsController@smartphones')->name('smartphones');