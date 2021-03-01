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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('index');
});

//HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//INDEX
Route::post('index','App\Http\Controllers\IndexController@index')->name('index');


//MOTORES

Route::get('/motores', 'App\Http\Controllers\MotoresController@index')->name('motores.index');
Route::get('/motores/{id}/show', 'App\Http\Controllers\MotoresController@show')->name('motores.show');


//NISSAN
Route::get('/nissans', 'App\Http\Controllers\NissansController@index')->name('nissans.index');
Route::get('/nissans/{id}/show', 'App\Http\Controllers\NissansController@show')->name('nissans.show');