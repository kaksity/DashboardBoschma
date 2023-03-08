<?php

use App\Http\Controllers\WebApp\Authentication\ChangePasswordController;
use App\Http\Controllers\WebApp\Authentication\ForgotPasswordController;
use App\Http\Controllers\WebApp\Authentication\LoginController;
use App\Http\Controllers\WebApp\Authentication\LogoutController;
use App\Http\Controllers\WebApp\DashboardController;
use App\Http\Controllers\WebApp\EnrollmentsController;
use App\Http\Controllers\WebApp\MessagesController;
use App\Http\Controllers\WebApp\NewsController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\WebApp\ReportsController;
use App\Http\Controllers\Website\AboutUsController;
use App\Http\Controllers\Website\ContactUsController;
use App\Http\Controllers\Website\NetworksController;
use App\Http\Controllers\Website\ProgrammesController;
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
Route::group(['prefix' => 'app'], function () {
    Route::get('/', function () {
        return redirect()->route('webapp.dashboards.index');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::resource('/enrollments', EnrollmentsController::class, [
            'names' => [
                'index' => 'webapp.enrollments.index',
                'create' => 'webapp.enrollments.create',
                'store' => 'webapp.enrollments.store',
                'show' => 'webapp.enrollments.show',
            ]
        ]);

        Route::resource('/dashboard', DashboardController::class, [
            'names' => [
                'index' => 'webapp.dashboards.index',
            ]
        ]);

        Route::resource('/reports', ReportsController::class, [
            'names' => [
                'index' => 'webapp.reports.index',
            ]
        ]);

        Route::resource('/messages', MessagesController::class, [
            'names' => [
                'index' => 'webapp.messages.index',
                'show' => 'webapp.messages.show',
            ]
        ]);

        Route::resource('/news', NewsController::class, [
            'names' => [
                'index' => 'webapp.news.index',
                'create' => 'webapp.news.create',
                'store' => 'webapp.news.store',
                'edit' => 'webapp.news.edit',
                'update' => 'webapp.news.update',
                'delete' => 'webapp.news.delete',
            ]
        ]);
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'store']);

        Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');

        Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

        Route::get('/change-password', [ChangePasswordController::class, 'index'])
                ->middleware('auth')->name('change-password');
        Route::post('/change-password', [ChangePasswordController::class, 'store'])->middleware('auth');
    });
});
Route::group(['prefix' => 'public'], function () {
    Route::get('/', function () {
        return redirect()->route('website.home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('website.home');
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('website.about-us');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('website.contact-us');
    Route::post('/contact-us', [ContactUsController::class, 'store']);
    Route::group(['prefix' => 'programmes'], function () {
        Route::get('/formal', [ProgrammesController::class, 'showFormal'])->name('website.programmes.formal');
        Route::get('/informal', [ProgrammesController::class, 'showInformal'])->name('website.programmes.informal');
        Route::get('/basic', [ProgrammesController::class, 'showBasic'])->name('website.programmes.basic');
    });

    Route::group(['prefix' => 'networks'], function () {
        Route::get('/healthcare-providers', [
            NetworksController::class, 'showHealthcareProviders'
        ])->name('website.networks.healthcare-providers');
        Route::get('/mdas', [NetworksController::class, 'showMDAs'])->name('website.networks.mdas');
    });
});
