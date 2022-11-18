<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Bookscontroller;
use App\Http\Controllers\Paymentcontroller;
use App\Http\Controllers\CategoryController;

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
Route::get('/login',[Usercontroller::class,'login'])->name('login');




Route::get('/about',[Aboutcontroller::class,'about']);


Route::get('/',[Homecontroller::class,'home'])->middleware('auth');

Route::get('/books',[Bookscontroller::class,'books']);
Route::get('/order',[Ordercontroller::class,'order']);
Route::get('/payment',[Paymentcontroller::class,'payment']);

Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::get('/category/create',[CategoryController::class,'create']);
Route::post('/category/store',[CategoryController::class,'store']);
Route::get('/category/delete/{product_id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category/view/{product_id}',[CategoryController::class,'view'])->name('category.view');





