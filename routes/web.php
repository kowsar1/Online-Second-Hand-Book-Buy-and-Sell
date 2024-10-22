<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Bookscontroller;
use App\Http\Controllers\Paymentcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\Websitecontroller;
use App\Http\Controllers\Frontend\SellpostController;

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

Route::get('/', [Websitecontroller::class, 'web'])->name('webhome');
Route::get('/search', [Websitecontroller::class, 'search'])->name('book.search');
Route::get('/view.book/{book_id}', [Websitecontroller::class, 'view_book'])->name('view.book');

Route::get('/category/book/{sell_id}', [Websitecontroller::class, 'category'])->name('book.category');
route::post('/register', [Websitecontroller::class, 'register'])->name('register');
route::post('/login', [Websitecontroller::class, 'login'])->name('user.login');

Route::group(['middleware' => 'auth'], function () {

    
    
    Route::get('/logout', [Websitecontroller::class, 'logout'])->name('user.logout');
    Route::get('/profile', [Websitecontroller::class, 'profile'])->name('user.profile');
    Route::post('/profile/update', [Websitecontroller::class, 'update'])->name('user.update');
    
    Route::post('/sellpost', [SellpostController::class, 'create'])->name('sellpost.create');
    Route::get('/viewsellpost', [SellpostController::class, 'view'])->name('sellpost.view');
    Route::get('/Rejectsellpost/{sell_id}', [SellpostController::class, 'delete'])->name('sellpost.delete');
    Route::get('/Approved/{sell_id}', [SellpostController::class, 'update'])->name('sellpost.update');
    Route::get('/hold/{sell_id}', [SellpostController::class, 'hold'])->name('sellpost.hold');
    Route::get('/Sell-book/{sell_id}', [SellpostController::class, 'sell_book'])->name('sell.book');

   
});

Route::get('/kowsar/login', [Usercontroller::class, 'login'])->name('login');
Route::post('/kowsar/dologin', [Usercontroller::class, 'dologin'])->name('do.login');


Route::group(['middleware' => 'auth', 'prefix' => 'kowsar'], function () {
    Route::group(['middleware' => 'checkadmin'], function () {

        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/user', [Usercontroller::class, 'view'])->name('user.view');
        Route::get('/about', [Aboutcontroller::class, 'about'])->name('about');
        Route::get('/', [Homecontroller::class, 'home'])->name('home');

        Route::get('/books', [Bookscontroller::class, 'list'])->name('book');
        Route::get('/books/create', [Bookscontroller::class, 'create'])->name('book.create');
        Route::post('/books/list', [Bookscontroller::class, 'store'])->name('book.store');
        Route::get('/books/view/{book_id}', [Bookscontroller::class, 'view'])->name('book.view');
        Route::get('/books/delete/{book_id}', [Bookscontroller::class, 'delete'])->name('book.delete');
        Route::get('/books/edit/{book_id}', [Bookscontroller::class, 'edit'])->name('book.edit');
        Route::put('/books/update/{book_id}', [Bookscontroller::class, 'update'])->name('book.update');

        Route::get('/report', [Homecontroller::class, 'report'])->name('report');
        Route::get('/generatereport', [Homecontroller::class, 'generatereport'])->name('generatereport');

        Route::get('/category', [CategoryController::class, 'category'])->name('category');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/delete/{product_id}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::get('/category/view/{product_id}', [CategoryController::class, 'view'])->name('category.view');
        Route::get('/category/edit/{product_id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/update/{product_id}', [CategoryController::class, 'update'])->name('category.update');

       
    });
});
