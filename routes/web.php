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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:super-admin'])->group(function () {

        Route::get('users', function () {
            return view('users');

        })->name('users');
    });

    Route::get('profile', function () {
        return view('profile');

    })->name('profile');

    Route::post('profile-update', function () {
        return view('profile');

    })->name('profile-update');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
