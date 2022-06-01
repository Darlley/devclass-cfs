<?php

use App\Models\User;
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

    $arr = ['suporte','vendas','checkout'];
    
    // User::create([
    //     'name' => "Darlley",
    //     'email' => "darlley01@example.net",
    //     'password' => bcrypt('123'),
    //     'tags' => $arr
    // ]);

    dd(User::all());

});
