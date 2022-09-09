<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminSaleController;
use App\Http\Controllers\Admin\AdminDlocalController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\SaleController;
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
// Route::get('cart', [CartController::class,'create'])->name('create');
// Route::get('/add-to-cart/product={product_id}', [CartController::class,'store'])->name('store');
// Route::delete('remove-from-cart/product={product_id}', [CartController::class,'destroy'])->name('destroy');
Route::get('ecourses', [FrontController::class,'ecourses'])->name('ecourses');
Route::get('ecourses/{slug}', [FrontController::class,'ecourse_show'])->name('ecourses.show');
// Route::get('/ecourses/buy-now/{product_id}', [SaleController::class,'index'])->name('index.purchase');
// Route::get('ecourses/cart', [CartController::class,'cart'])->name('cart')->middleware('cart');
Route::post('/cart', [CartDetailController::class, 'store']);
Route::delete('/cart', [CartDetailController::class, 'destroy']);

Route::get('contact', [FrontController::class,'contact'])->name('contact');
// Route::get('/products/checkout', [CartController::class,'checkout'])->name('checkout');

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [CartController::class, 'update']);
Route::get('/home/orders', [CartController::class, 'index']);
Route::middleware(['auth'])->prefix('home')->name('home.')->group(function () {
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

    Route::get('settings/dlocal', [AdminDlocalController::class,'index'])->name('dlocal.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
