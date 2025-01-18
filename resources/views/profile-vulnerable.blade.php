
<head>
    <title>Vulnerable Form</title>
</head>
<body>
    <h1>Vulnerable Form</h1>
    <form action="/profile-vulnerable" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Update Profile</button>
    </form>
    <a href="/profile-protected">Switch to Protected Form</a>
</body>
<script>
    setTimeout(() => {
        window.location.href = '/profile-protected';
    }, 5000); // Redirect to protected form after 5 seconds
</script>
<p><strong>Warning:</strong> This profile form is <em>vulnerable</em> and does not use CSRF protection!</p>
