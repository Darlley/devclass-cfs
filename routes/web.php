<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function (Request $request) {

    $user = DB::select('insert into users (name, email, email_verified_at, password, remember_token) values (:name, :email, :email_verified_at, :password, :remember_token)',[
        'name' => $request['nome'], 
        'email' => $request['email'], 
        'email_verified_at' => date($request['email_verified']), 
        'password' => bcrypt($request['password']), 
        'remember_token' => Str::random(10)
    ]);
    dd($user);

});
