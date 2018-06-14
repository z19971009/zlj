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
Route::any("/check","UserController@check");
Route::get("/comm","MessController@comm");

Route::post("addsave","MessController@addsave");
Route::post("/delete","MessController@delete");

Route::any("login/index",'Login\LoginController@index');
Route::post("/login",'Login\LoginController@login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//地区表
Route::get('area/index','houtai\AreaController@index');
Route::get('area/add','houtai\AreaController@add');
Route::post('area/addSave','houtai\AreaController@addSave');
Route::any('area/edit/{id}','houtai\AreaController@edit');
Route::post('area/editSave','houtai\AreaController@editSave');
Route::any('area/delete/{id}','houtai\AreaController@delete');
//电视剧集表
Route::get('tv_collection/index','houtai\Tv_collectionController@index');
Route::get('tv_collection/add','houtai\Tv_collectionController@add');
Route::post('tv_collection/addSave','houtai\Tv_collectionController@addSave');
Route::any('tv_collection/edit/{id}','houtai\Tv_collectionController@edit');
Route::post('tv_collection/editSave','houtai\Tv_collectionController@editSave');
Route::any('tv_collection/delete/{id}','houtai\Tv_collectionController@delete');
//导演表
Route::get('director/index','houtai\DirectorController@index');
Route::get('director/add','houtai\DirectorController@add');
Route::post('director/addSave','houtai\DirectorController@addSave');
Route::any('director/edit/{id}','houtai\DirectorController@edit');
Route::post('director/editSave','houtai\DirectorController@editSave');
Route::any('director/delete/{id}','houtai\DirectorController@delete');
//演员表
Route::get('actor/index','houtai\ActorController@index');
Route::get('actor/add','houtai\ActorController@add');
Route::post('actor/addSave','houtai\ActorController@addSave');
Route::any('actor/edit/{id}','houtai\ActorController@edit');
Route::post('actor/editSave','houtai\ActorController@editSave');
Route::any('actor/delete/{id}','houtai\ActorController@delete');
//电视剧表
Route::any('tv/index', 'houtai\TvController@index');
Route::any('tv/add', 'houtai\TvController@add');
Route::any('tv/edit/{id?}', 'houtai\TvController@edit');
Route::any('tv/delete/{id}', 'houtai\TvController@delete');

//年代表
Route::get('years/index','houtai\YearsController@index');
Route::any('years/add','houtai\YearsController@add');
Route::any('years/edit/{id?}','houtai\YearsController@edit');
Route::any('years/delete/{id?}','houtai\YearsController@delete');
//作者表
Route::get('authors/index','houtai\AuthorsController@index');
Route::any('authors/add','houtai\AuthorsController@add');
Route::any('authors/edit/{id?}','houtai\AuthorsController@edit');
Route::any('authors/delete/{id?}','houtai\AuthorsController@delete');
//小说章节表
Route::get('novel_chapter/index','houtai\Novel_chapterController@index');
Route::any('novel_chapter/add','houtai\Novel_chapterController@add');
Route::any('novel_chapter/edit/{id?}','houtai\Novel_chapterController@edit');
Route::any('novel_chapter/delete/{id?}','houtai\Novel_chapterController@delete');
//评论表
Route::get('comment/index','houtai\CommentController@index');
Route::any('comment/add','houtai\CommentController@add');
Route::any('comment/edit/{id?}','houtai\CommentController@edit');
Route::any('comment/delete/{id?}','houtai\CommentController@delete');


//小说表
Route::get('novel/index', 'houtai\NovelController@index');
Route::any('novel/add', 'houtai\NovelController@add');
Route::any('novel/edit/{id?}', 'houtai\NovelController@edit');
Route::any('novel/delete/{id}', 'houtai\NovelController@delete');
//用户表
Route::get('user/index', 'houtai\UserController@index');
Route::any('user/add', 'houtai\UserController@add');
Route::any('user/edit/{id?}', 'houtai\UserController@edit');
Route::any('user/delete/{id}', 'houtai\UserController@delete');

//类型表
Route::get('type/index', 'houtai\TypeController@index');
Route::any('type/add', 'houtai\TypeController@add');
Route::any('type/edit/{id?}', 'houtai\TypeController@edit');
Route::any('type/delete/{id}', 'houtai\TypeController@delete');

//电影表
Route::any('film/index', 'houtai\FilmController@index');
Route::any('film/add', 'houtai\FilmController@add');
Route::any('film/edit/{id?}', 'houtai\FilmController@edit');
Route::any('film/delete/{id}', 'houtai\FilmController@delete');
//Route::any('film/soo', 'houtai\FilmController@soo');