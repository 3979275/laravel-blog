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

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function(){
	Route::get('Index/index', 'IndexController@index');
	Route::get('Admin/index', 'AdminController@index');
});
