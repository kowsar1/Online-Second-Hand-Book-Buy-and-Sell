<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Companycontroller;
use App\Http\Controllers\Applicationcontroller;
use App\Http\Controllers\Tablecontroller;

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

Route::get('/about',[Aboutcontroller::class,'about']);
Route::get('/application',[Applicationcontroller::class,'application']);
Route::get('/table',[Tablecontroller::class,'table']);
Route::get('/company',[Companycontroller::class,'company']);
Route::get('/',[Homecontroller::class,'home']);





