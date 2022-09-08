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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name("products.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show')->name("products.show");
Route::get('/people', 'App\Http\Controllers\PeopleController@index')->name("people.index");
Route::get('/people/{id}', 'App\Http\Controllers\PeopleController@show')->name("people.show");

