<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'homePage'])->name('homePage');
Route::get('/aboutMe', [FrontController::class, 'aboutMe'])->name('aboutMe');
Route::get('/PsyanMusic', [FrontController::class, 'PsyanMusic'])->name('PsyanMusic');
Route::get('/Fortheschool', [FrontController::class, 'Fortheschool'])->name('School');
Route::get('/advice', [FrontController::class, 'advice'])->name('advice');
Route::get('/cognitive', [FrontController::class, 'cognitive'])->name('cognitive');
