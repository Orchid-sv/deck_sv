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

Route::get('/','TopController@index');
Route::get('/decklist/{id}/{reg}','DeckController@index');
Route::get('/deck','DeckController@deck');
Route::get('/newdeck','DeckController@newdeck');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit', 'HomeController@edit');
Route::get('/home/edit/user_name', 'HomeController@user_name');
Route::post('home/edit/user_name','HomeController@name_edit');
Route::get('/home/edit/user_icon', 'HomeController@user_icon');
Route::post('home/edit/user_icon','HomeController@icon_edit');