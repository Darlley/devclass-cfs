@extends('master')
@section('content')

<form action="{{ route('user.store') }}" method="post">
    @csrf

    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="" class="form-control">
    <span>{{ $errors->first('firstName') }}</span>

    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" id="" class="form-control">
    <span>{{ $errors->first('lastName') }}</span>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="" class="form-control">
    <span>{{ $errors->first('email') }}</span>

    <label for="password">Password</label>
    <input type="password" name="password" id="" class="form-control">
    <span>{{ $errors->first('password') }}</span>

    <button type="submit" class="btn btn-primary">Criar</button>

</form>

@endsection