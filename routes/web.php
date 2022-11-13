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
put 
patch
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
//     return view('layouts.ui');
// });
// get route for category index
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

// get route for category create
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
// post route for category store
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');