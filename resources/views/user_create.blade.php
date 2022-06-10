@extends('master')
@section('content')

@if(session()->has('success'))
    <x-alert key="success" :message="session()->get('success')" />
@elseif(session()->has('error'))
    <x-alert key="danger" :message="session()->get('error')" />    
@endif

<form action="{{ route('user.store') }}" method="post">
    @csrf

    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="" class="form-control">
    <span>{{ $errors->first('first_name') }}</span>

    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="" class="form-control">
    <span>{{ $errors->first('last_name') }}</span>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="" class="form-control">
    <span>{{ $errors->first('email') }}</span>

    <label for="password">Password</label>
    <input type="password" name="password" id="" class="form-control">
    <span>{{ $errors->first('password') }}</span>

    <button type="submit" class="btn btn-primary">Criar</button>

</form>

@endsection