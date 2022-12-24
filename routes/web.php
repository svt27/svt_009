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

Route::get('/public/profile/{user}', 'App\Http\Controllers\AccountController@profile')->name('public.profile');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:super-admin'])->group(function () {

        Route::get('users', function () {
            return view('users');

        })->name('users');
    });

    Route::get('profile', function () {
        return view('profile');

    })->name('profile');

    Route::put('profile-update', 'App\Http\Controllers\AccountController@updateUser')->name('profile-update');

    Route::resource('accounts', 'App\Http\Controllers\AccountController');

    Route::get('deposit', 'App\Http\Controllers\AccountController@getDepositForm')->name('deposit.show');
    Route::post('deposit', 'App\Http\Controllers\AccountController@storeDeposit')->name('deposit.store');
    Route::get('withdraws', 'App\Http\Controllers\AccountController@getWithdrawForm')->name('withdraw.show');
    Route::post('withdraws', 'App\Http\Controllers\AccountController@storeWithdraw')->name('withdraw.store');

    Route::get('transfers', 'App\Http\Controllers\AccountController@getTransferForm')->name('transfer.show');
    Route::post('transfers', 'App\Http\Controllers\AccountController@storeTransfer')->name('transfer.store');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
