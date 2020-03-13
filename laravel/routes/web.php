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
Route::get('/users', 'UsersController@index')->name('users-list');
Route::get('/user/{id}/{name}', 'UsersController@view')->where('id', '\d+');
Route::get('/redirect', function () {
    return redirect()->route('users-list');
});
