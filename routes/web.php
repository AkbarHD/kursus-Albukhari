<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    return view('home');
});
Route::get('/login/admin', [LoginController::class, 'index'])->name('login');
Route::post('/store', [LoginController::class, 'store'])->name('store');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/homeadmin', [HomeController::class, 'index'])->name('homeadmin');
