<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function store(LoginRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
    }
}
