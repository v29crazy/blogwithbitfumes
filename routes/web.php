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

//User Routes
Route::group(['namespace' => 'User'], function () {
        
    Route::get('/', 'HomeController@index');

    Route::get('post', 'PostController@index');

});


Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/home','HomeController@index')->name('admin.home');
        
    //post routes
    Route::resource('admin/user', 'UserController');

    //post routes
    Route::resource('admin/post', 'PostController');

    //tag routes
    Route::resource('admin/tag', 'TagController');

    //category routes
    Route::resource('admin/category', 'CategoryController');

});

