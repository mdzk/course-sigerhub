<?php

use App\Http\Controllers\Auth\ChangeDefaultPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/class', [HomeController::class, 'class'])->name('class');
Route::get('/event', [HomeController:: class, 'event'])->name('event');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/admin', function () {
    return 'your admin';
})->middleware('admin');

Auth::routes();
Route::get('/auth/reset', [ChangeDefaultPasswordController::class, 'index'])->middleware('auth');
Route::post('/auth/reset/update', [ChangeDefaultPasswordController::class, 'update'])->name('password-update')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::post('/verify/{id}', [HomeController::class, 'verify'])->name('verify');
