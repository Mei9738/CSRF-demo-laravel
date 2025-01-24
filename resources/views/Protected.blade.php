<!-- Protected Form -->
<form action="/profile-protected" method="POST">
    @csrf
    <input type="text" name="name" value="User 2">
    <button type="submit">Submit (With CSRF)</button>
</form>