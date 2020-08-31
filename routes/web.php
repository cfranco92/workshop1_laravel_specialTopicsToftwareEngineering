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

Route::get('/', function () {
    return view('welcome');
});

// User routes
Route::get('/user/list', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::get('/user/show/{id}', 'UserController@show' )->name("user.show");
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');