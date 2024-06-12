<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('dashboard_admin');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/p', [AuthController::class, 'p'])->name('p');
Route::get('/regist', [AuthController::class, 'regist'])->name('regist');
Route::post('/p', [AuthController::class, 'post_p'])->name('post_p');
Route::post('/regist', [AuthController::class, 'post_regist'])->name('post_regist');


Route::get('/email/need-verification', [VerifyEmailController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');


require __DIR__ . '/auth.php';

Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');


Route::get('/dashboard', [AllController::class, 'dashboard'])->name('dashboard');
Route::get('/field_place', [AllController::class, 'field_place'])->name('field_place');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');


Route::get('dashboard_admin', function () {
    return view('admin.dashboard_admin');
})->name('dashboard_admin');

Route::get('manajemen_field', function () {
    return view('admin.manajemen_field');
})->name('manajemen_field');

Route::get('manajemen_user', function () {
    return view('admin.manajemen_user');
})->name('manajemen_user');
