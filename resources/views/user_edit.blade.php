<form action="{{ route('user.delete',1) }}" method="POST">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ $token }}"> --}}
    
    @method('DELETE')
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    {{-- <input type="hidden" name="_method" value="DELETE"> --}}

    <input type="text" name="firstName" value="Darlley">
    <input type="text" name="lastName" value="Brito">
    <button type="submit">Delete</button>
</form>