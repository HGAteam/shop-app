<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminDlocalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\MyAccountController;
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
Route::get('ecourses', [FrontController::class, 'ecourses'])->name('ecourses');
Route::get('ecourses/{slug}', [FrontController::class, 'ecourse_show'])->name(
    'ecourses.show'
);
Route::post('/cart', [CartDetailController::class, 'store']);
Route::delete('/cart', [CartDetailController::class, 'destroy']);
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('terms-conditions', [FrontController::class, 'terms'])->name(
    'terms'
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::middleware(['auth'])->prefix('home')->name('home.')->group(function () {
        // USERS
        Route::post('/', [CartController::class, 'test']);

        Route::get('/orders', [CartController::class, 'index']);
        Route::post('/orders/refund/{id}', [CartController::class, 'refund']);

        Route::get('my-account', [MyAccountController::class, 'index'])->name(
            'my_account'
        );

        Route::post('my-account', [MyAccountController::class, 'update'])->name(
            'my_account.update'
        );

        // DOCUMENTATION
        Route::get('/documentation', [FrontController::class,'documentation'])->name('documentation');


        // ONLY ADMIN ROUTES
        Route::middleware(['admin'])->group(function () {
            Route::get('get-categories', [
                AdminCategoryController::class,
                'getCategories',
            ])->name('get_categories');

            Route::get('categories', [
                AdminCategoryController::class,
                'index',
            ])->name('categories');

            Route::post('categories/store', [
                AdminCategoryController::class,
                'store',
            ])->name('categories.store');

            Route::delete('categories/delete={id}', [
                AdminCategoryController::class,
                'destroy',
            ])->name('categories.delete');

            Route::post('categories/edit={id}', [
                AdminCategoryController::class,
                'update',
            ])->name('categories.update');

            Route::get('products', [
                AdminProductController::class,
                'index',
            ])->name('products');

            Route::post('products', [
                AdminProductController::class,
                'store',
            ])->name('products.store');

            Route::post('products/edit={id}', [
                AdminProductController::class,
                'update',
            ])->name('products.update');

            Route::delete('products/delete={id}', [
                AdminProductController::class,
                'destroy',
            ])->name('products.destroy');

            Route::get('get-products', [
                AdminProductController::class,
                'getProducts',
            ])->name('get_products');

            Route::get('products/images={id}', [
                AdminImageController::class,
                'index',
            ])->name('products.images');

            Route::post('products/images={id}', [
                AdminImageController::class,
                'store',
            ])->name('products.images.store');

            Route::delete('/products/images={id}', [
                AdminImageController::class,
                'destroy',
            ])->name('products.images.destroy');

            Route::get('/products/images={id}/select/{product}', [
                AdminImageController::class,
                'select',
            ])->name('products.images.select');

            Route::get('dlocal', [AdminDlocalController::class, 'index'])->name(
                'dlocal.index'
            );

            Route::get('manage-orders', [
                AdminOrderController::class,
                'index',
            ])->name('manage_order.index');

            Route::post('manage-orders/{id}', [
                AdminOrderController::class,
                'update',
            ])->name('manage_order.update');

            Route::delete('manage-orders/delete={id}', [
                AdminOrderController::class,
                'destroy',
            ])->name('manage_order.destroy');

            Route::get('get-orders', [
                AdminOrderController::class,
                'getOrders',
            ])->name('get_orders');

            Route::get('users', [UserController::class, 'index'])->name(
                'users'
            );
            Route::get('get-users', [UserController::class, 'getUsers'])->name(
                'get_users'
            );
        });
    });
