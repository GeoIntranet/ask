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
    return redirect()->route('ask');
});

Route::get('/question','AskController@index')->name('ask');
Route::get('/its','AskController@it')->name('it');
Route::any('/recherche','AskController@ask')->name('recherche');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{id}/delete', 'PostController@destroy')->middleware('auth')->name('post.destroy');
Route::resource('post', 'PostController');


Route::get('/home', 'HomeController@index')->name('home');
