<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

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


Route::get('/home', [PagesController::class, 'home']);
Route::get('/', [PagesController::class, 'redirect']);
Route::get('/faq', [PagesController::class, 'faq']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/reviews', [PagesController::class, 'reviews']);


Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
