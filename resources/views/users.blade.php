@extends('master')
@section('content')
    <div>
        <h2>DB::raw USERS</h2>
        <ul>
            @foreach ($users as $key => $user)
            <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection