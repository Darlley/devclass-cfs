<header class="d-flex justify-content-between">
    <div>
        <a href="{{ route('home') }}">Users</a>
        <a href="{{ route('user.create') }}">Create</a>
    </div>

    @auth
    <div>
        <span>
            Olá {{ auth()->user()->first_name }} ✨
            <br>
            <a href="{{ route('login.destroy') }}">Sair</a>
        </span>
    </div>
    @endauth
</header>
