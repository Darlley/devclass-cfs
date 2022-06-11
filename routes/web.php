<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/user/create', [UserController::class,'create'])->name('user.create');
Route::post('/user/store', [UserController::class,'store'])->name('user.store');

Route::get('/user/{user:id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{user:id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{user:id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::post('/password/{user:id}', [PasswordController::class, 'update'])->name('password.update');

