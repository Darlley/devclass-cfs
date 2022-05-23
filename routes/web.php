<?php

use Illuminate\Support\Collection;
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
    $data = DB::select("select * from users");
    // $pluck = new Collection([
    //         ["name"=>"Desk"], 
    //         ["name"=>"Chair"]
    // ]); 
    $collection = collect($data);
    dd($collection->filter(function($value, $key){
        if($key > 10){
            return $value;
        };
    })->take(10));
});
