<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [LandingPageController::class, 'index']);

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');

Route::get('/create', [BeasiswaController::class, 'create'])->name('create');

Route::post('/store', [BeasiswaController::class, 'store'])->name('store');
