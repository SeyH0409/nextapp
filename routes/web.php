<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get("/", [ArticleController::class, 'index'])->name('index');
Route::get("/create", [ArticleController::class, 'create'])->name('create');
Route::post("/store", [ArticleController::class, 'store'])->name('store');
Route::get("/show/{id}", [ArticleController::class, 'show'])->name('show');
