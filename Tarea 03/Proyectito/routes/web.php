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
Route::get('prueba', function(){
    return 'Esta es una prueba';
});
Route::get('nombre/{param}', function($param){
    return 'Usuario: '.$param;
});
Route::get('Controller', 'PruebaController@index');
Route::get('name/{name}', 'PruebaController@MyName');

Route::resource('Photo','PhotoController');
Route::resource('User', 'UserController');