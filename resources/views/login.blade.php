@extends('master')
@section('content')
    <h2>Fazer login</h2>

    <form action="{{ route('login.store') }}" method="post">
        @csrf

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="darlleybrito@gmail.com">
            {{ $errors->first('email') }}
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" value="dev123">
            {{ $errors->first('password') }}
        </div>

        <input type="checkbox" name="remember" id=""> Lembrar?

        <button type="submit">Entrar</button>
    </form>
@endsection
