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

Route::get('/dashboard', 'Nttps\MetronicTheme\Http\Controllers\PagesController@index');


// Demo routes
Route::get('/datatables', 'Nttps\MetronicTheme\Http\Controllers\PagesController@datatables');
Route::get('/ktdatatables', 'Nttps\MetronicTheme\Http\Controllers\PagesController@ktDatatables');
Route::get('/select2', 'Nttps\MetronicTheme\Http\Controllers\PagesController@select2');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'Nttps\MetronicTheme\Http\Controllers\PagesController@quickSearch')->name('quick-search');
