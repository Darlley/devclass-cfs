<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// GET é para pegar uma coisa
// POST é para cadastrar uma coisa
// PUT é para atualizar
// DELETE é para deletar


// Route::get('/', function () {
//     // dd('Home');
//     return view('welcome');
// }); // closure -> collable

// $home = function(){
//     dd('Home');
// };
// Route::get('/', $home);

// Route::get('/', HomeController::class.'@index'); 
Route::get('/', [HomeController::class, 'index']);


// Route::get('/contato', function(){
//     dd('Contato');
// });

// Route::post('/create/user', function(){
//     dd('Create');
// });

// Route::put('/update/user', function(){
//     dd('Update');
// });

// Route::delete('/delete/user', function(){
//     dd('Delete');
// });

Route::match(['get','post'], '/user/test', [HomeController::class, 'index']);