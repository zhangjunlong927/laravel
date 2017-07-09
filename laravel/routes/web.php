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
    echo 'I have a dream';
});

Route::get('index/index', 'Admin\IndexController@index');

Route::post('/form', 'Admin\IndexController@form');

Route::get('index/add', 'Admin\IndexController@index');

Route::get('test/test', 'Admin\TestController@test');
//
Route::any('/login/login', 'Admin\LoginController@login');