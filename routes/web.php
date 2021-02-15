<?php

use App\Http\Controllers\BooksContrller;
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
Route::get('/books',[BooksContrller::class,'index']);
Route::get('/books/show/{id?}',[BooksContrller::class,'show']);
Route::get('/book/create',[BooksContrller::class,'create']);
Route::post('/create/book',[BooksContrller::class,'store'])->name('create.book');
