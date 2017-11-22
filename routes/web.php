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
Route::get('login/facebook','FbLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'FbLoginController@handleProviderCallback');



Route::get('/', ['uses' => 'ControllerMaya@index', 'as' => 'index']);
Route::post('/login1', 'ControllerMaya@login');
Route::get('/logout', 'ControllerMaya@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
