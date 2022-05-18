<?php

use App\Http\Controllers\LoginController;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('home');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/error', function() {
    return "<h1>Caminho não encontrado!</h1>";
})->name('error');