<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\SettingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/','index');
    Route::POST('/sub', 'storeEmail');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::post('/post-message', 'postMessage');
    Route::get('/services', 'services');
    Route::get('/categories/{category_slug}', 'product');
    Route::get('/product-view/{category_slug}/{product_slug}', 'productView');
    Route::get('/place-order/{category_slug}/{product_slug}', 'placeOrder');
    Route::post('/place-order', 'storeOrder');

    Route::get('/search', 'searchProducts');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\SettingController::class)->group(function () {
        Route::get('/settings','index');
        Route::post('settings', 'store');
    });

    Route::controller(App\Http\Controllers\Admin\passwordCondroller::class)->group(function () {
        Route::get('/change-password','passwordCreate');
        Route::post('change-password', 'changePassword');
    });

    Route::controller(App\Http\Controllers\Admin\SubController::class)->group(function () {
        Route::get('subscribers','index');
        Route::get('subscribers/{subscriber}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders','index');
        Route::get('sliders/create','create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit','edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('category','index');
        Route::get('category/create','create');
        Route::post('category/create','store');
        Route::get('category/{category}/edit','edit');
        Route::put('category/{category}','update');
        Route::get('category/{category}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\OfferController::class)->group(function () {
        Route::get('offers','index');
        Route::get('offers/create','create');
        Route::post('offers/create','store');
        Route::get('offers/{offer}/edit','edit');
        Route::put('offers/{offer}','update');
        Route::get('offers/{offer}/delete','destroy');
    });

    Route::controller(App\Http\Controllers\Admin\ProductsController::class)->group(function () {
        Route::get('products','index');
        Route::get('products/create','create');
        Route::post('products/create','store');
        Route::get('products/{product}/edit','edit');
        Route::put('products/{product}','update');
        Route::get('product-image/{product_image_id}/delete','destroyImage');
        Route::get('products/{product}/delete','destroy');

        Route::get('/search', 'searchProducts');
    });

    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
        Route::get('orders','index');
        Route::get('orders/{order}/delete','destroy');
    });

});

