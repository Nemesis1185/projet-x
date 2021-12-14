<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\AdminController;

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