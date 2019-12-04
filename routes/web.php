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

Route::get('/', 'UsersController@index')->name('users.index');
Route::get('/users', 'UsersController@index');
Route::patch('/users/updateCurrent', 'UsersController@updateCurrent')->name('users.updateCurrent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
