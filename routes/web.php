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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/event/{event}', [EventInfoController::class, 'show'])->name('event-info');

Route::post('/messages', [MessagesController::class, 'store']);

// Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('register/{event}', [RegisterEventController::class, 'show'])->name('event-register');
    Route::post('register/{event}', [RegisterEventController::class, 'store']);

    Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
});
