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

Route::get('/','UserController@index');

Route::get('contact', 'UserController@contact')->name('contact');

Route::post('store', 'UserController@store')->name('store');

Auth::routes();

Route::group(['namespace' => 'Admin'], function(){
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/draft', 'DraftController');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{post}', 'UserController@post')->name('post');
