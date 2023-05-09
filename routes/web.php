<?php

use App\Http\Controllers\Admin\CatergoryController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Category
    Route::controller(CatergoryController::class)->group(function () {
        Route::get('/category/', 'index')->name('category.index');
        Route::get('/category/create/', 'create')->name('category.create');
        Route::post('/category/', 'store')->name('category.store');
        Route::get('/category/{category}/edit', 'edit')->name('category.edit');
        Route::put('/category/{category}', 'update')->name('category.update');
    });

    // Product
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index')->name('product.index');
        Route::get('/products/create', 'create')->name('product.create');
        Route::post('/products', 'store')->name('product.store');
        Route::get('/products/{product}/edit', 'edit')->name('product.edit');
        Route::put('/products/{product}/', 'update')->name('product.update');

        Route::get('/products/{product_id}/delete', 'destroy')->name('product.delete');
        Route::get('product-image/{product_image_id}/delete', 'destroyImage')->name('product.deleteImage');
    });

    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class)->name('brands');

    Route::controller(ColorController::class)->group(function () {
        Route::get('/colors', 'index')->name('colors.index');
        Route::get('/colors/create', 'create')->name('colors.create');
        Route::post('/colors/create', 'store')->name('colors.store');
        Route::get('/colors/{color}/edit', 'edit')->name('colors.edit');
        Route::put('/colors/{color}', 'update')->name('colors.update');
        Route::get('/colors/{color}/delete', 'delete')->name('colors.delete');
    });
});
