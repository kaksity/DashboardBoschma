<?php

use App\Http\Controllers\Web\Authentication\ChangePasswordController;
use App\Http\Controllers\Web\Authentication\ForgotPasswordController;
use App\Http\Controllers\Web\Authentication\LoginController;
use App\Http\Controllers\Web\Authentication\LogoutController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\EnrollmentsController;
use App\Http\Controllers\Web\ReportsController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::group([ 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'enrollments'], function () {
        Route::get('/', [EnrollmentsController::class, 'index'])->name('enrollments.list');
        Route::get('/create', [EnrollmentsController::class, 'create'])->name('enrollments.create');
        Route::post('/', [EnrollmentsController::class, 'store'])->name('enrollments.store');
        Route::get('/{id}', [EnrollmentsController::class, 'show'])->name('enrollments.details');
    });
    
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [DashboardController::class, 'index']);
    });
    
    Route::group(['prefix' => 'reports'], function () {
        Route::get('/', [ReportsController::class, 'index'])->name('reports');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
    
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    
    Route::get('/change-password', [ChangePasswordController::class, 'index'])->middleware('auth')->name('change-password');
    Route::post('/change-password', [ChangePasswordController::class, 'store'])->middleware('auth');
});
