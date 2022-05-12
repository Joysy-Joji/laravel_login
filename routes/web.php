<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::name('web.')
    ->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('login1', [HomeController::class, 'showLogin'])->name('login.show');

        Route::post('login', [HomeController::class, 'login'])->name('login');

        Route::get('register', [HomeController::class, 'showRegister'])->name('register.show');

        Route::post('register', [HomeController::class, 'register'])->name('register');

        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    });




