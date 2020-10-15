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

//List
// Route::get('posts', 'PostController@index');

// // Individual Entity
// Route::get('posts/{id}', 'PostController@show');

// Create, Store, Edit, Update, Destroy

// GET, POST, PUT, PATCH, DELETE

// Route::post('posts', 'PostController@store');
// Route::put('posts/{id}', 'PostController@update);
// Route::delete('posts/{id}', 'PostController@destroy');

// Route::get('posts/create', 'PostController@create);
// Route::get('posts/{id}/edit', 'PostController@edit);
