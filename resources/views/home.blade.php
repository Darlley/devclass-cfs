@extends('master')
@section('content')
    <h1>Lista de Users</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->first_name }} {{ $user->last_name }} - {{ $user->email }}
                <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                <a href="{{ route('user.destroy', $user->id) }}">Deletar</a>
            </li>
        @endforeach
    </ul>

    {{ $users->links() }}
@endsection
