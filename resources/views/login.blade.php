@extends('templates.app', [
    'title' => 'Login title'
])

@section('contents')
    <h2>Login</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <x-button>
            <x-slot name="text">Login</x-slot>
        </x-button>
    </form>
@endsection
