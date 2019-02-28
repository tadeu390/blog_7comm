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

Route::get('/post', 'PostController@index')->name('index');
Route::get('/post/create', 'PostController@create')->name('create');
Route::get('/post/edit', 'PostController@create')->name('create');
Route::get('/post/detail', 'PostController@detail')->name('detail');
Route::get('/post/delete/{post}', 'TagController@delete')->name('delete');
Route::post('/post/store/{post}', 'PostController@store')->name('store');

Route::get('/tag', 'TagController@index')->name('index');
Route::get('/tag/create', 'TagController@create')->name('create');
Route::get('/tag/edit/{tag}', 'TagController@edit')->name('edit');
Route::get('/tag/detail', 'TagController@detail')->name('detail');
Route::get('/tag/delete/{tag}', 'TagController@delete')->name('delete');
Route::post('/tag/store/', 'TagController@store')->name('store');