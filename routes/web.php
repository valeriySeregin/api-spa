<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news', [NewsController::class, 'index'])->name('news.index');

Route::get('search', [NewsController::class, 'search'])->name('search');

Route::get('newsByDates', [NewsController::class, 'newsByDates'])->name('newsByDates');

Route::get('news/{id}', [NewsController::class, 'show'])->name('news.show');
