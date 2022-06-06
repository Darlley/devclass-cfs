<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            'title' => "Home",
            'users' => User::paginate(5)
        ]);
    }
}
