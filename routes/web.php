<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/login', [LoginController::class, 'create'])
            ->middleware('guest')
            ->name('login');

Route::post('/login', [LoginController::class, 'store'])
            ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
