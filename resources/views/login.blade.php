<x-layout>
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <input type="email" name="email" value="darlleybrito@gmail.com">
        <input type="password" name="password" value="123">
        <button type="submit">Logar</button>
    </form>
</x-layout>