<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        if($request->method() == 'GET'){
            dd('Home controller - GET');
        }else if($request->method() == 'POST'){
            dd('Home controller - POST');
        }
    }
}
