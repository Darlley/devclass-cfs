<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            .item::nth-child('even'){
                background-color:#ddd;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Home</h1>

            <ul>
                @foreach ($users as $user)
                <li class="item">
                    <p>{{ $user->name }} | {{ $loop->count }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
