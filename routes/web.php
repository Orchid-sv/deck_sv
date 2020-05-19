<?php

use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;

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
Route::get('/user_decklist/{user_id}','DeckController@user_decklist');
Route::get('/deck/{deck_id}','DeckController@deck');
Route::post('/comment_add','DeckController@comment_add');
Route::post('/deck_register','DeckController@deck_Register');
Route::get('/test','DeckController@test');

Route::get('/user/{user_id}','UserController@index');
Route::post('/user_comment_add','UserController@user_comment_add');

Route::get('/card/{card_id}','CardController@index');
Route::get('/cardlist/{id}','CardController@cardlist');

Route::get('search','SearchController@search');
Auth::routes(['verify' => true]);
Auth::routes();

Route::middleware('verified')->group(function() {
    Route::get('/newdeck','DeckController@newdeck');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/edit', 'HomeController@edit');
    Route::get('/home/edit/user_introduction', 'HomeController@user_introduction');
    Route::get('/home/edit/user_name', 'HomeController@user_name');
    Route::post('home/edit/user_edit','HomeController@user_edit');
    Route::get('/home/edit/user_icon', 'HomeController@user_icon');
    Route::post('home/edit/image_edit','HomeController@image_edit');
    Route::get('/home/edit/user_header', 'HomeController@user_header');
    Route::get('/home/edit/user_pas', 'HomeController@user_pas');
    Route::post('/home/edit/pasword_edit', 'HomeController@pasword_edit');
    Route::get('/home/edit/user_email', 'HomeController@user_email');
