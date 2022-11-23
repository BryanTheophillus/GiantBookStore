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
|{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}
*/

Route::get('/',['App\Http\Controllers\NavigationController','home']);
Route::get('/contact',['App\Http\Controllers\NavigationController','contact']);
Route::get('/', ['App\Http\Controllers\BookController', 'getAllBooks']);
Route::get('/publisher',['App\Http\Controllers\PublisherController', 'publisher']);
Route::get('/{catagory}', ['App\Http\Controllers\BookController', 'getBooksByCategory']);
Route::get('/detail/{book}', ['App\Http\Controllers\NavigationController', 'getDetail']);
Route::get('/publisher/{PublisherDetail}', ['App\Http\Controllers\PublisherController', 'getPublisherDetail']);
