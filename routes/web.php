<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ------------------------aurhors route----------------------
Route::get('/authors', 'AuthorController@index')->name('authors');
Route::post('/authors', 'AuthorController@postAuthor')->name('authors');
//----------------------books route-------------------------------
Route::get('/books', 'BookController@index')->name('books');
Route::post('/books', 'BookController@postBook')->name('books');
Route::get('/viewbook/{id}', 'BookController@viewBook');
Route::get('/deletebook/{id}', 'BookController@deleteBook');