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

Route::get('/con', function () {
    return view('contacto_ladingpage');
});

Route::get('/hola',function(){ 
    //'HOLS MUNDO';  
    return view('lading-page');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
