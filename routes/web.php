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

Route::get('/event/{event}', [EventController::class, 'show'])->name('event-info');

Route::get('/event-page', function () {
    return view('pages.event.template');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('register/{event}', [RegisterEventController::class, 'show'])->name('event-register');
    Route::post('register/{event}', [RegisterEventController::class, 'store']);
});
