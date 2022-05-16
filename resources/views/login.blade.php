@extends('templates.app', [
    'title' => 'Login title'
])

@section('contents')
    <h2>Login</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <button type="submit" name="">Login</button>
    </form>
@endsection


@section('assets')
<script>alert('login')</script>
@endsection