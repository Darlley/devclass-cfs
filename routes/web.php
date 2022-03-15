<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    // var_dump($_SERVER);  VAR_DUMP()
    // dd($_SERVER);        DD()  
    // dump($_SERVER);      DUMP()
    // ddd($_SERVER);       DDD()

    $users = User::all();
    return $users; // JSON
    
    // return view('welcome');
});
