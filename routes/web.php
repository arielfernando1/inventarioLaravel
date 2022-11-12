<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

//CATEGORY ROUTES
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('categories.show');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::delete('/categories/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::patch('/categories/{id}',[CategoryController::class,'update'])->name('categories.update');
//PRODUCT ROUTES
Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::patch('/products/{id}',[ProductController::class,'update'])->name('products.update');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('products.destroy');