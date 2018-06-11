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
//路由控制器的方法  这样就可以在UserController的控制器中编写方法和代码，有参数的要记得加上参数

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/user","UserController@index");
Route::post("login","UserController@login");
Route::get("/comm","MessController@comm");

Route::post("addsave","MessController@addsave");
Route::post("/delete","MessController@delete");