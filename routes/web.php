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
    // $deleted = DB::table('users')->delete();                                                             delete todos
    // $deleted = DB::table('users')->delete(100);                                                          delete id 100
    // $deleted = DB::table('users')->where('email','kelly.rico@r7.com')->delete();                         delete quando email =
    // $deleted = DB::table('users')->where('id',119)->update([                                             update de todos
    //     'name' => 'Darlley Brito'
    // ]);
    $deleted = DB::table('users')->where('id',119)->update([                                             // update quando id =
        'name' => 'Darlley Brito'
    ]);
    dd($deleted);
});
