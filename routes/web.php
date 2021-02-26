<?php

namespace App\Http\Controllers;
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

Route::get('error/{number}', [ErrorsController::class, 'show'])->name('error');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/event/{event}', [EventController::class, 'show'])->name('event-info');

Route::get('/contact', [MessagesController::class, 'create'])->name('contact');
Route::post('/messages', [MessagesController::class, 'store']);

Route::post('/messages', [MessagesController::class, 'store']);

// Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('announcements');

    Route::get('register/{event}', [EventController::class, 'create'])->name('event-register');
    Route::post('register/{event}', [EventController::class, 'store']);
    Route::post('update/{event}', [EventController::class, 'resetStatus'])->name('reset-status');

    // Admin section
    Route::get('/verify/{event}', [DashboardController::class, 'edit'])->name('verification');
    Route::post('/verify/{event}', [DashboardController::class, 'update']);
    Route::get('/export/{event}', [DashboardController::class, 'export'])->name('export');

    Route::resource('message', MessagesController::class);
    Route::resource('announcement', AnnouncementsController::class);
});
