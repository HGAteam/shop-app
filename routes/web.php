<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminSaleController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('welcome');

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('home')->name('home.')->group(function () {
    Route::get('get-categories', [AdminCategoryController::class,'getCategories'])->name('get_categories');
    Route::get('categories', [AdminCategoryController::class,'index'])->name('categories');
    Route::post('categories/store', [AdminCategoryController::class,'store'])->name('categories.store');
    Route::delete('categories/delete={id}', [AdminCategoryController::class,'destroy'])->name('categories.delete');
    Route::post('categories/edit={id}', [AdminCategoryController::class,'update'])->name('categories.update');

    Route::get('products', [AdminProductController::class,'index'])->name('products');
    Route::post('products', [AdminProductController::class,'store'])->name('products.store');
    Route::post('products/edit={id}', [AdminProductController::class,'update'])->name('products.update');
    Route::delete('products/delete={id}', [AdminProductController::class,'destroy'])->name('products.destroy');
    Route::get('get-products', [AdminProductController::class,'getProducts'])->name('get_products');
    Route::get('products/images={id}', [AdminImageController::class,'index'])->name('products.images');
	Route::post('products/images={id}', [AdminImageController::class,'store'])->name('products.images.store');
	Route::delete('/products/images={id}', [AdminImageController::class,'destroy'])->name('products.images.destroy');
	Route::get('/products/images={id}/select/{product}', [AdminImageController::class,'select'])->name('products.images.select');
    
    Route::get('orders', [AdminOrderController::class,'index'])->name('orders');
    Route::get('sales', [AdminSaleController::class,'index'])->name('sales');
});
