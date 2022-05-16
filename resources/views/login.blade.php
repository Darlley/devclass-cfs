<x-layout>
    <h2>Login</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" name="name">

        <x-button class="button_login" type="submit">
            Login
        </x-button>
    </form>
</x-layout>