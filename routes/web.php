<?php

use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login');

Auth::routes();

Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Depa
    Route::get('depa', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::name('admin.')->prefix('user')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Depa
    Route::get('depa', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
