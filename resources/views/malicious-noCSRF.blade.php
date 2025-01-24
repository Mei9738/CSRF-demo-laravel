<!-- Malicious Form (Simulate Attack) -->
<form action="/profile-vulnerable" method="POST">
    <input type="text" name="name" value="Malicious User">
    <button type="submit">Malicious Submit (no CSRF)</button>
</form>