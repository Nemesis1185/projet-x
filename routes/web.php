<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;

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

Route::get('/', [DefaultController::class, 'home'])->name('homepage');
Route::get('/user/register', [UserController::class, 'register'])->name('register');
Route::get('/user/login', [UserController::class, 'login'])->name('login');
Route::post('/user/register', [UserController::class, 'signup'])->name('signup');
Route::post('/user/login', [UserController::class, 'signin'])->name('signin');
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/event/{id}', [EventController::class, 'showEvent'])->name('event.showEvent');
