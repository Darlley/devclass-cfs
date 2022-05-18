<x-layout>

    @include('partials.errors')

    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <fieldset>{{ $title }}</fieldset>

        <div>
            <input type="text" name="email" value="{{ old('email') }}"> {{ $errors->first('email') }}
        </div>

        <div>
            <input type="password" name="password"> {{ $errors->first('password') }}
        </div>

        <button type="submit">Login</button>
    </form>

</x-layout>