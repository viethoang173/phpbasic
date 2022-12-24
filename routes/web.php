<?php

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
Route::get('/',[\App\Http\Controllers\HomeController::class, 'welcome']);
Route::get('/about',[\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/booking',[\App\Http\Controllers\HomeController::class, 'booking']);
Route::get('/contact',[\App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/gallery',[\App\Http\Controllers\HomeController::class, 'gallery']);
Route::get('/news',[\App\Http\Controllers\HomeController::class, 'news']);
Route::get('/select-booking',[\App\Http\Controllers\HomeController::class, 'selectBooking']);
Route::get('/sign-in',[\App\Http\Controllers\HomeController::class, 'signIn']);
Route::get('/sign-up',[\App\Http\Controllers\HomeController::class, 'signUp']);
Route::get('/submit-booking',[\App\Http\Controllers\HomeController::class, 'submitBooking']);

Route::get('/test',[\App\Http\Controllers\HomeController::class, 'info']);
