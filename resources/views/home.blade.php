@extends('templates.app', [
    'title' => 'Home title'
])

@section('contents')
    <h2>Home</h2>
@endsection

@section('assets')
<script>alert('home')</script>
@endsection