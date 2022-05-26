<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {

    return view('users',[
        'users' => DB::table('users')->select('id','name','email')->paginate(10),
        'usersAll' => DB::table('users')->select('id','name','email')->simplePaginate(10)
    ]);
});
