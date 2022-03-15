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

Route::get('/', [HomeController::class, 'index']);

// 
// Route::get('/user/{id}/{name}/{age}', function($id,$name,$age){
//     dd("User: $id ($name), $age yers");
// })->where(["id" => "[0-9]+", "name" => "[A-z]+", "age" => "[0-9]+"]);

Route::get('/user/{id}/{name}/{age}', function($id,$name,$age){
    dd("User: $id ($name), $age yers");
})->whereNumber('id')->whereAlpha('name')->whereNumber('age');