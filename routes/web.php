<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
//Rotes Admin
Route::resource('pymes', 'EstablecimientoController');
Route::resource('subcategories', 'SubcategoryController');
Route::resource('categories', 'CategoryController');
Route::resource('jobs', 'JobController');
Route::get('/job/status/', 'JobController@status')->name('status');
Route::get('/job/todos', 'JobController@todos')->name('todos');
