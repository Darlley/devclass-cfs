@extends('master')
@section('content')
    <div>
        <h2>Paginate Bootstrap</h2>
        <ul>
            @foreach ($users as $key => $user)
            <li>{{ $user->id }} - {{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
        {{ $users->links() }}
    </div>

    <div>
        <h2>Simple Paginate</h2>
        <ul>
            @foreach ($usersAll as $key => $user)
            <li>{{ $user->id }} - {{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
        {{ $usersAll->links() }}
    </div>
@endsection