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
Route::get('/authors/new', ['as' => 'admin.authors.new', 'uses' => 'Admin\AuthorController@new']);
Route::post('/authors/save', ['as' => 'admin.authors.save', 'uses' => 'Admin\AuthorController@save']);
Route::get('/authors/edit/{id}', ['as' => 'admin.authors.edit', 'uses' => 'Admin\AuthorController@edit']);
Route::put('/authors/update/{id}', ['as' => 'admin.authors.update', 'uses' => 'Admin\AuthorController@update']);
Route::get('/authors/delete/{id}', ['as' => 'admin.authors.delete', 'uses' => 'Admin\AuthorController@delete']);


// BOOKS
Route::get('/books', ['as' => 'admin.books', 'uses' => 'Admin\BookController@index']);


// GENRES
Route::get('/genres', ['as' => 'admin.genres', 'uses' => 'Admin\GenreController@index']);
Route::get('/genres/new', ['as' => 'admin.genres.new', 'uses' => 'Admin\GenreController@new']);
Route::post('/genres/save', ['as' => 'admin.genres.save', 'uses' => 'Admin\GenreController@save']);
Route::get('/genres/edit/{id}', ['as' => 'admin.genres.edit', 'uses' => 'Admin\GenreController@edit']);
Route::put('/genres/update/{id}', ['as' => 'admin.genres.update', 'uses' => 'Admin\GenreController@update']);
Route::get('/genres/delete/{id}', ['as' => 'admin.genres.delete', 'uses' => 'Admin\GenreController@delete']);


// PUBLISHERS
Route::get('/publishers', ['as' => 'admin.publishers', 'uses' => 'Admin\PublisherController@index']);
Route::get('/publishers/new', ['as' => 'admin.publishers.new', 'uses' => 'Admin\PublisherController@new']);
Route::post('/publishers/save', ['as' => 'admin.publishers.save', 'uses' => 'Admin\PublisherController@save']);
Route::get('/publishers/edit/{id}', ['as' => 'admin.publishers.edit', 'uses' => 'Admin\PublisherController@edit']);
Route::put('/publishers/update/{id}', ['as' => 'admin.publishers.update', 'uses' => 'Admin\PublisherController@update']);
Route::get('/publishers/delete/{id}', ['as' => 'admin.publishers.delete', 'uses' => 'Admin\PublisherController@delete']);
