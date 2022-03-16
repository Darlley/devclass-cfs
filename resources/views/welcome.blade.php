<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        @if(session('message'))
            <p>{{ session('message') }}</p>
        @endif
        <form action="/login" method="post">
            @csrf
            <input type="email" name="email" id="" value="{{ old('email') }}">
            <input type="password" name="senha" id="">
            <button type="submit">Login</button>
        </form>
    </body>
</html>
