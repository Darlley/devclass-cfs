<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);
Route::resource('user', UserController::class)->names([
    'create' => 'create.user',
    'store' => 'store.user'
])->only(['index','store','create']);

Route::get('/teste', function(){
    return redirect()->route('create.user');
});


// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/create', [UserController::class, 'create']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/user/{id}/edit', [UserController::class, 'edit']);
// Route::put('/user/{id}', [UserController::class, 'update']);
// Route::post('/user', [UserController::class, 'store']);
// Route::delete('/user/{id}', [UserController::class, 'destroy']);

// class Route {

//     public static function get(){
//         //
//     }

// }
