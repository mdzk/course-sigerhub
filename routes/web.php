<?php

use App\Http\Controllers\Auth\ChangeDefaultPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UsersVerificationController;
use App\Http\Controllers\User\CourseController as UserCourseController;
use App\Http\Controllers\User\UserDashboardController;
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

Route::get('/class/{slug}', [HomeController::class, 'classShow']);
Route::get('/class', [HomeController::class, 'classSearch'])->name('search');

Route::get('/category/{slug}', [HomeController::class, 'categoryShow']);

Route::get('/event', [HomeController::class, 'event']);
Route::get('/event/detail/{slug}', [HomeController::class, 'eventShow']);
Route::get('/event/category/{slug}', [HomeController::class, 'eventTipe'])->name('event-tipe');

Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

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
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course-edit');
    Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course-update');
    Route::post('/course/destroy/{id}', [CourseController::class, 'destroy'])->name('course-destroy');

    // Manajemen Video Section
    Route::get('/video', [VideosController::class, 'index'])->name('video');
    Route::get('/video/create', [VideosController::class, 'create'])->name('video-create');
    Route::post('/video/store', [VideosController::class, 'store'])->name('video-store');
    Route::get('/video/edit/{id}', [VideosController::class, 'edit'])->name('video-edit');
    Route::post('/video/update/{id}', [VideosController::class, 'update'])->name('video-update');
    Route::post('/video/destroy/{id}', [VideosController::class, 'destroy'])->name('video-destroy');

    // Manajemen Kategori Section
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories-create');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories-store');
    Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories-edit');
    Route::post('/categories/update/{id}', [CategoriesController::class, 'update'])->name('categories-update');
    Route::post('/categories/destroy/{id}', [CategoriesController::class, 'destroy'])->name('categories-destroy');

    // Manajemen Event Section
    Route::get('/event', [EventsController::class, 'index'])->name('event');
    Route::get('/event/create', [EventsController::class, 'create'])->name('event-create');
    Route::post('/event/store', [EventsController::class, 'store'])->name('event-store');
    Route::get('/event/edit/{id}', [EventsController::class, 'edit'])->name('event-edit');
    Route::post('/event/update/{id}', [EventsController::class, 'update'])->name('event-update');
    Route::post('/event/destroy/{id}', [EventsController::class, 'destroy'])->name('event-destroy');

    // Manajemen Setting Section
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/setting/edit', [SettingController::class, 'edit'])->name('setting-edit');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting-update');
});

Route::prefix('dashboard')->middleware(['auth', 'user'])->group(function () {
    Route::get('', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('course', [UserCourseController::class, 'index'])->name('dashboard-course');
    Route::get('class/{class}/{video}', [UserCourseController::class, 'video']);
});

// Authentication Section
Auth::routes();
Route::get('/auth/reset', [ChangeDefaultPasswordController::class, 'index'])->middleware('auth');
Route::post('/auth/reset/update', [ChangeDefaultPasswordController::class, 'update'])->name('password-update')->middleware('auth');
