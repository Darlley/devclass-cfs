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

    // $users = User::all();

    // $html = "<ul>";
    // foreach ($users as $user)
    // {
    //     $html .= "<li>$user->tags</li>";
    // }
    // $html .= "</ul>";

    // return $html;

    $user = User::create([
        "name" => "Beltrano jr 2",
        "email" => "beltrano@mail.com",
        "password" => bcrypt("123"),
        "tags" => ["Maria","Felipe","João"]
    ]);

    dd($user);

});
