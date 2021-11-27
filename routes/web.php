<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Auth\RegistrationController;
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

// home route
Route::get('/', [HomePageController::class, 'index'])->name('index');

//  retister route
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
