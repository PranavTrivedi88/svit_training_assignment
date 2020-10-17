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

//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');

// Route::get('posts', 'PostController@index')->name('post.index');

// Route::get('posts/create', 'PostController@create');

// Route::get('posts/{post}', 'PostController@show')->name('post.show');

// Route::post('posts', 'PostController@store');

// Route::get('posts/{post}/edit', 'PostController@edit');
// Route::put('posts/{post}', 'PostController@update');

// Route::delete('posts/{post}', 'PostController@destroy');
