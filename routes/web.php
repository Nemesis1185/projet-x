<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MapController;


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
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/events/create', [AdminController::class, 'create'])->name('create');
Route::post('/events/create', [AdminController::class, 'store'])->name('store');
Route::get('/events/{id}/edit', [AdminController::class, 'edit'])->name('edit');
Route::post('/events/{id}/edit', [AdminController::class, 'update'])->name('update');
Route::get('/events/{id}/delete', [AdminController::class, 'delete'])->name('delete');
Route::get('/user/register', [UserController::class, 'register'])->name('register');
Route::get('/user/login', [UserController::class, 'login'])->name('login');
Route::post('/user/register', [UserController::class, 'signup'])->name('signup');
Route::post('/user/login', [UserController::class, 'signin'])->name('signin');
Route::get('/profil/{id}', [UserController::class, 'profil'])->name('profil');
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/event/{id}', [EventController::class, 'showEvent'])->name('event.showEvent');
Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/data', [MapController::class, 'data'])->name('data');
Route::get('/map', [MapController::class, 'map'])->name('map');

