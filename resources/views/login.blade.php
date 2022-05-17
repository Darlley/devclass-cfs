<x-layout>
    
    @include('partials.errors')
    
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <fieldset>{{ $title }}</fieldset>
        
        <div>
            <input type="text" name="email" value="darlleybrito@gmail.com"> {{ $errors->first('email') }}
        </div>
        
        <div>
            <input type="password" name="password" value="12345678"> {{ $errors->first('password') }}
        </div>

        <button type="submit">Login</button>
    </form>

</x-layout>