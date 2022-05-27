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

    $users = DB::table('users')->select(DB::raw('count(*) as user_count, name'))
        ->where('id','>',10)
        ->groupBy('name')
        ->get();

    return view('users',[
        'users' => $users,
    ]);
});
