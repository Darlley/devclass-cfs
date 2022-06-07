<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user_create', [
            'title' => "User create"
        ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        if($validated){
            $user = User::create([
                "first_name" => $request->firstName,
                "last_name" => $request->lastName,
                "email" => $request->email,
                "password" => bcrypt($request->password)
            ]);
            dd($user->toArray(), User::all());
        }else{
            dd('!criado');
        }

    }
}
