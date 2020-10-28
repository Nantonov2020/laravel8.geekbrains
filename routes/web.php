<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/news', [CategoryController::class, 'index'])->name('news');
Route::get('/category/{slug}', [CategoryController::class, 'category'])->name('category')->where('slug', '[A-Za-z]+');

Route::get('/news/{id}', [NewsController::class, 'showNews'])->where('id', '[0-9]+')->name('detail');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
