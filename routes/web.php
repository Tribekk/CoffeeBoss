<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GalleryPhotoController;
use App\Http\Controllers\NewsBlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserController;
use App\Models\Review;
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

Route::get('/', function () {
    $reviews = Review::query()->orderBy('created_at')->paginate(3);
    return view('welcome', compact('reviews'));
})->name('home');

Route::get('/gallery', [GalleryPhotoController::class, 'index'])->name('gallery');

Route::name('user.')->group(function () {
    Route::get('/user', [UserController::class, 'user'])->middleware('auth')->name('thisUser');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.thisUser'));
        }
        return view('user/login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login']);

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/signup', function () {
        if (auth()->check()) {
            return redirect(route('user.thisUser'));
        }
        return view('user/signup');
    })->name('signup');

    Route::post('/signup', [UserController::class, 'signup']);

    Route::get('/delete', [UserController::class, 'destroy'])->name('delete');
    Route::name('update.')->prefix('/update')->group(function () {
        Route::get('/avatar', function () {
            return view('user/avatar');
        })->name('avatar');

        Route::post('/avatar', [UserController::class, 'avatar']);

        Route::get('/password', function () {
            return view('user/password');
        })->name('password');

        Route::post('/password', [UserController::class, 'password']);
    });
});
Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewsController::class, 'create']);

Route::get('/news', [NewsBlogController::class, 'index'])->name('news');

Route::get('/contacts', function (){
   return view('contacts');
})->name('contacts');
Route::middleware('auth')->group(function (){
    Route::controller(ProductController::class)->group(function (){
        Route::get('/products', 'show')->name('products');
        Route::get('/add/order/list/{id}', 'add')->name('add.order.list');
        Route::get('/cart', 'show')->name('cart');
        Route::get('/cart/plus/{id}', 'plus')->name('plus.id');
        Route::get('/cart/minus/{id}', 'minus')->name('minus.id');
        Route::get('/cart/delete/{id}', 'delete')->name('cart.delete');
        Route::post('/cart', 'create');
    });

    Route::controller(CartController::class)->group(function (){
        Route::get('/cart', 'index')->name('cart');
        Route::post('/cart/remove', 'remove')->name('cart.remove');
        Route::get('/orders', 'status')->name('orders');
        Route::get('/check/{id}', 'check')->name('check');
        Route::get('/download/{id}', 'download')->name('download');
    });
});
