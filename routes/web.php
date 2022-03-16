<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProductController
};

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

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::post('/login', function(){

    return back()->withInput()->with('message', 'Erro ao fazer o login');

});

Route::get('/product/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');

// Route::get('/teste', function(){
//     return redirect()->route('product', ['id'=> '45']);
// });

Route::get('/teste', function(){

    // return redirect()->action([HomeController::class, 'index']);

    // return redirect()->action([ProductController::class, 'edit'],[
    //     'id'=>'45'
    // ]);
    
    // return redirect()->action([ProductController::class, 'create']);
    
    // return redirect()->away('https://google.com/'); // links externo

});