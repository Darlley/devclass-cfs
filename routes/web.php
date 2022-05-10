<?php

use App\Http\Controllers\{
    AdminController,
    ClientController,
    HomeController
};
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'index'])->name('login');
Route::get('/protected', [HomeController::class, 'index'])->name('protected')->middleware('teste:Darlley');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('admin.home')->withoutMiddleware('auth');
    Route::get('/clients', [ClientController::class,'index'])->name('admin.clients');
});
