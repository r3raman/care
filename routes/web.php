<?php

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



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });

    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');

    Route::get('/add_client', function () {
        return view('backend.pages.add_client');
    })->name('add_client');

    Route::get('/dashboard-sidebar', function () {
        return view('backend.pages.dashboard-sidebar');
    })->name('dashboard.sidebar');

    Route::get('/scheduler', function () {
        return view('backend.pages.scheduler');
    })->name('scheduler');
    Route::get('/advance-sidebar', function () {
        return view('backend.pages.advance-sidebar');
    })->name('table');
});



require __DIR__ . '/auth.php';
