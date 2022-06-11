<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PasswordController extends Controller
{
    public function update(Request $request, User $user){
        $validated = $request->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $updated = $user->update($validated);
        $updated && session()->flash('password_confirmation',"Senha atualizada com sucesso!");

        return back();
    }
}
