<?php

use App\Http\Controllers\MoviesController;
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

Route::get('/', [MoviesController::class,'welcome'])->name('welcome');
Route::get('/serie', [MoviesController::class,'series'])->name('series');
Route::get('/catalogue',[MoviesController::class, 'catalogue'])->name('catalogue');
Route::get('/detail/{id}',[MoviesController::class, 'detail'])->name('detail');