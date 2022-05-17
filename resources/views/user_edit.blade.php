<form action="{{ route('user.delete',1) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="text" name="firstName" value="Darlley">
    <input type="text" name="lastName" value="Brito">
    <button type="submit">Delete</button>
</form>