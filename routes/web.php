<?php

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

Route::prefix('blog')->group(function(){
    Route::get('/', function(){
        dd('Blog');
    });

    Route::get('/post/{slug}', function($id_slug){
        dd($id_slug);
    })->where('slug', '[a-z\-\0-9]+');
});

Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        dd('Admin');
    });
});

Route::get('/', function () {
    return view('welcome');
});
