<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/',  'index')->name('frontend.homepage.index');
    Route::get('/collections',  'categories')->name('frontend.categories.index');
    Route::get('/collections/{category_slug}/',  'products')->name('frontend.products.index');
    Route::get('/collections/{category_slug}/{product_slug}',  'productView')->name('frontend.product.productView');
});

Route::controller(WishlistController::class)->group(function () {
    Route::get('/wishlist',  'index')->name('wishlist');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Category
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/', 'store')->name('category.store');
        Route::get('/category/{category}/edit', 'edit')->name('category.edit');
        Route::put('/category/{category}/', 'update')->name('category.update');
        Route::get('/category/{category}/delete', 'delete')->name('category.delete');
    });

    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class)->name('brands');

    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index')->name('products.index');
        Route::get('/products/create', 'create')->name('products.create');
        Route::post('/products', 'store')->name('products.store');
        Route::get('/products/{product}/edit', 'edit')->name('products.edit');
        Route::put('/products/{product}', 'update')->name('products.update');
        Route::get('/products/{product_id}/delete', 'destroy')->name('products.destroy');

        Route::get('/product-image/{product_image_id}/delete', 'destroyImage')->name('products.destroyImage');

        Route::post('product-color/{prod_color_id}', 'updateProductColorQty')->name('product.update_product_color_qty');
    });

    Route::controller(ColorController::class)->group(function () {
        Route::get('/colors', 'index')->name('colors.index');
        Route::get('/colors/create', 'create')->name('colors.create');
        Route::post('/colors/create', 'store')->name('colors.store');
        Route::get('/colors/{color}/edit', 'edit')->name('colors.edit');
        Route::put('/colors/{color_id}/', 'update')->name('colors.update');
        Route::get('/colors/{color_id}/delete', 'destroy')->name('colors.destroy');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('/sliders', 'index')->name('sliders.index');
        Route::get('/sliders/create', 'create')->name('sliders.create');
        Route::post('/sliders/create', 'store')->name('sliders.store');
        Route::get('/sliders/{slider}/edit', 'edit')->name('sliders.edit');
        Route::put('/sliders/{slider}/', 'update')->name('sliders.update');
        Route::get('/sliders/{slider}/delete', 'destroy')->name('sliders.destroy');
    });
});
