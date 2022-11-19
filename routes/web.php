<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhscontroller;

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

Route::get('/Home', [mhscontroller::class,'index']);
Route::get('/Home/Create', [mhscontroller::class,'create']);
Route::POST('/Home/Store', [mhscontroller::class,'store']);
Route::get('/Home/{id}/edit', [mhscontroller::class,'edit']);
Route::put('/Home/{id}', [mhscontroller::class,'update']);
Route::delete('/Home/{id}', [mhscontroller::class,'destroy']);
Route::get('/about', [mhscontroller::class,'about']);