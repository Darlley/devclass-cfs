<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
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

    public function store(UserRequest $request){

        // $validated = $request->validate([
        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|min:5'
        // ]);

        // if($validated){
        //     $user = User::create([
        //         "first_name" => $request->firstName,
        //         "last_name" => $request->lastName,
        //         "email" => $request->email,
        //         "password" => bcrypt($request->password)
        //     ]);
        //     dd($user->toArray(), User::all());
        // }else{
        //     dd('!criado');
        // }

        $validated = $request->validated();

        $saved = (new User())->insert($validated);

        if($saved){
            session()->flash('success', 'Cadastrado com sucesso!');
        }else{
            session()->flash('error', 'Erro ao cadastrar!');
        }

        return back();

    }

    public function edit(User $user){
        return view('user-edit',[
            'title' => $user->first_name,
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user){

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        $updated = $user->update($validated);
        $updated && session()->flash('updated_success',"Usuario ".$user->first_name." atualizado com sucesso!");

        return back();
    }

    public function destroy(User $user){
        $user->delete();

        return back();
    }
}
