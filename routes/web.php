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