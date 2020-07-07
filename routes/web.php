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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// HOME
Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);

// AUTHORS
Route::get('/authors', ['as' => 'admin.authors', 'uses' => 'Admin\AuthorController@index']);

// BOOKS
Route::get('/books', ['as' => 'admin.books', 'uses' => 'Admin\BookController@index']);

// GENRES
Route::get('/genres', ['as' => 'admin.genres', 'uses' => 'Admin\GenreController@index']);

// PUBLISHERS
Route::get('/publishers', ['as' => 'admin.publishers', 'uses' => 'Admin\PublisherController@index']);