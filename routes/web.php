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

Route::get('/','UserController@index')->name('sign-in');
Route::get('dashboard','UserController@dashboard')->name('dashboard');
Route::post('create','UserController@create')->name('create');
Route::post('login','UserController@login')->name('login');
Route::get('logout','UserController@logout')->name('logout');
Route::post('create-post','PostController@store')->name('store');
Route::get('likePost/{id}/{status}','LikeController@create')->name('likePost');
Route::get('profile','UserController@profile')->name('profile');
Route::get('getOnlineStatus','UserController@getOnlineStatus')->name('getOnlineStatus');
Route::get('chatting/{friendId}','ChatController@index')->name('index');
Route::post('store','ChatController@store')->name('store');