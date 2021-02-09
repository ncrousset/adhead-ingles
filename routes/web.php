<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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


Route::get('/register', [RegisterController::class, 'create'])
            ->middleware('guest')
            ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
            ->middleware('guest')
            ->name('register');

Route::get('/login', [LoginController::class, 'login'])
            ->middleware('guest')
            ->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
            ->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])
            ->middleware('auth')
            ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
            ->middleware('guest')
            ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
            ->middleware('guest')
            ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
            ->middleware('guest')
            ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
            ->middleware('guest');



Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
