<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsResourceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactsController;

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
Route::get('/category/{slug}', [CategoryController::class, 'category'])->name('category')->where('slug', '[A-Za-z-]+');

Route::get('/news/{id}', [NewsController::class, 'showNews'])->where('id', '[0-9]+')->name('detail');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');


Route::resource('/reviews',ReviewsController::class);

Route::resource('/orders',OrdersController::class);

Route::resource('/categories',CategoriesController::class);

Route::resource('/newsresource',NewsResourceController::class);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/correctcategory/{id}', [AdminController::class, 'correctcategory'])->name('correctcategory');
Route::get('/admin/showallnews', [AdminController::class, 'showAllNews'])->name('showallnews');
Route::get('/admin/correctnews/{id}', [AdminController::class, 'correctNews'])->name('correctnews');
Route::get('/admin/addnews', [AdminController::class, 'addNews'])->name('addnews');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
