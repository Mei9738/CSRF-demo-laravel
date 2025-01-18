<!-- <!DOCTYPE html>
<html>
<head>
    <title>Protected Form</title>
</head>
<body>
    <h1>Protected Form</h1>
    <form action="/profile-protected" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Update Profile</button>
    </form>
    <a href="/profile-vulnerable">Switch to Vulnerable Form</a>
</body>
</html> -->
<p>Profile updated successfully with CSRF protection!</p>
