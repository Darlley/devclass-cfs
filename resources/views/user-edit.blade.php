@extends('master')
@section('content')

@if(session()->has('updated_success'))
    <x-alert key="success" :message="session()->get('updated_success')" />
@elseif(session()->has('updated_error'))
    <x-alert key="danger" :message="session()->get('updated_error')" />
@endif

<form action="{{ route('user.update', $user->id) }}" method="post">
    @csrf
    <fieldset>
        <legend>Atualizar dados do usuario</legend>

        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="" class="form-control" value={{$user->first_name}}>
        <span>{{ $errors->first('first_name') }}</span>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="" class="form-control" value={{$user->last_name}}>
        <span>{{ $errors->first('last_name') }}</span>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="" class="form-control" value={{$user->email}}>
        <span>{{ $errors->first('email') }}</span>

        <button type="submit" class="btn btn-primary">Criar</button>
    </fieldset>
</form>

<hr>

@if(session()->has('password_confirmation'))
    <x-alert key="success" :message="session()->get('password_confirmation')" />
@endif

<form action="{{ route('password.update', $user->id) }}" method="post">
    @csrf
    <fieldset>
        <legend>Atualizar sua senha</legend>

        <label for="password">Nova senha</label>
        <input type="password" name="password" id="" class="form-control">
        <span>{{ $errors->first('password') }}</span>

        <label for="password_confirmation">Confirmar senha</label>
        <input type="password" name="password_confirmation" class="form-control">
        <span>{{ $errors->first('password_confirmation') }}</span>

        <button type="submit" class="btn btn-primary">Criar</button>
    <fieldset>
</form>

@endsection
