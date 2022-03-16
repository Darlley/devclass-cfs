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

Route::get('/', function () {
    // dd(Route('home'));
    return view('welcome');
})->name('home');

// Route::get('/contact', function(){
//     return redirect()->route('teste');
//     // return redirect('teste');
//     // dd(Route('contact'));
// })->name('contact');

// Route::get('/teste3', function(){
//     dd(Route('teste'));
// })->name('teste');


Route::name('admin.')->prefix('admin')->group(function(){

    Route::get('/create', function(){
        dd('Create admin');
    })->name('create');

    Route::get('/update', function(){
        dd('Update admin');
    })->name('update');

});