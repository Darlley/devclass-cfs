<x-layout>
    <form action="{{ route('login.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>{{ $title }}</fieldset>
        <input type="email" name="email" value="darlleybrito@gmail.com">
        <input type="password" name="password" value="12345678">
        <input type="file" name="file" id="">
        <button type="submit">Login</button>
    </form>
</x-layout>