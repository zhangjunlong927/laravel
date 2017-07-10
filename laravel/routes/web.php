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


//登录页面
Route::any('/login/login', 'Admin\LoginController@login')->name('login');

//设置中间间 所有页面都要验证是否登录
//指定guard
Route::group(['middleware' => 'auth:admin'], function () {
    //后台首页
    Route::get('/admin/index', 'Admin\IndexController@index');
    Route::get('/admin/welcome', 'Admin\IndexController@welcome');
    //退出
    Route::get('/login/logout', 'Admin\LoginController@logout');
});

