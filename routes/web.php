<?php

use App\Http\Controllers\Auth\ChangeDefaultPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UsersVerificationController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->middleware('auth')->name('home');
Route::get('/class', [HomeController::class, 'class'])->name('class');
Route::get('/class-detail', function () {
    return view('home.class-detail');
});
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/event-detail', function () {
    return view('home.event-detail');
});
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('', [AdminDashboardController::class, 'index'])->name('admin');

    // Manajemen Usaha Section
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/users-verification', [UsersVerificationController::class, 'index'])->name('users-verification');
    Route::post('/verify/{id}', [UsersVerificationController::class, 'verify'])->name('verify');
    Route::post('/reject/{id}', [UsersVerificationController::class, 'reject'])->name('reject');

    // Manajemen Kelas Section
    Route::get('/course', [CourseController::class, 'index'])->name('course');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course-create');
    Route::post('/course/store', [CourseController::class, 'store'])->name('course-store');

    // Manajemen Kategori Section
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories-create');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories-store');
    Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories-edit');
    Route::post('/categories/update/{id}', [CategoriesController::class, 'update'])->name('categories-update');
    Route::post('/categories/destroy/{id}', [CategoriesController::class, 'destroy'])->name('categories-destroy');
});

// Authentication Section
Auth::routes();
Route::get('/auth/reset', [ChangeDefaultPasswordController::class, 'index'])->middleware('auth');
Route::post('/auth/reset/update', [ChangeDefaultPasswordController::class, 'update'])->name('password-update')->middleware('auth');
