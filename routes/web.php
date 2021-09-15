<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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



Route::get('/login', [AuthController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('/login', [AuthController::class, 'login'])->name('submitLogin');

//product
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('admin.layout.dashboard');
    })->name('dashboard');
    Route::get('/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('/search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('{id}/update', [ProductController::class, 'showUpdate'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'edit'])->name('product.update');
    Route::delete('{id}/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');
    Route::get('{id}/filter', [ProductController::class, 'getProduct'])->name('product.getProduct');
    Route::get('/category', [ProductController::class, 'showCategory'])->name('filter.category');
    Route::get('/category2', [ProductController::class, 'showCategory2'])->name('filter2.category');
    Route::get('/brand', [ProductController::class, 'brand'])->name('brand.product');


    // auth
    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
});


//cart
Route::get('/index', function () {
    return view('frontend.cart');
})->name('shop.cart');
Route::get('/shopping', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('cart.addToCart');
Route::get('/remove-to-cart/{id}', [CartController::class,'removeProductIntoCart'])->name('cart.removeCart');




//Route::prefix('groups')->group(function () {
//    Route::get('/{id}/products', [CategoryController::class, 'getProducts'])->name('categories.getProducts');
//});


//page
Route::get('/',[\App\Http\Controllers\Page\ProductController::class, 'index'])->name('home.page');
