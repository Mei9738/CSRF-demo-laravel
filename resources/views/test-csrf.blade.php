<!-- Vulnerable Form -->
<form action="/profile-vulnerable" method="POST">
    <input type="text" name="name" value="User 1">
    <button type="submit">Submit (No CSRF)</button>
</form>

<!-- Protected Form -->
<form action="/profile-protected" method="POST">
    @csrf
    <input type="text" name="name" value="User 2">
    <button type="submit">Submit (With CSRF)</button>
</form>

<!-- Malicious Form (Simulate Attack) -->
<form action="/profile-protected" method="POST">
    <input type="text" name="name" value="Malicious User">
    <button type="submit">Malicious Submit (Enabled CSRF)</button>
</form>
