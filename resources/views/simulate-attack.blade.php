<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Attack Simulation</title>
</head>
<body>
    <h1>Malicious CSRF Attack Simulation</h1>
    <p>This page simulates a CSRF attack by sending a POST request to the vulnerable route.</p>

    //Form to simulate CSRF attack 
    <form action="{{ url('/profile-vulnerable') }}" method="POST" id="csrf-attack-form">
        <input type="hidden" name="name" value="Hacked User">
        <button type="submit">Simulate Attack</button>
    </form>

    <script>
    setTimeout(() => {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/profile-vulnerable';

        // Simulate form data
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'name';
        input.value = 'Hacked!';
        form.appendChild(input);

        document.body.appendChild(form);
        form.submit();
    }, 3000); // 3-second delay
</script>
</body>
</html> -->
<p><strong>Warning:</strong> This action simulates a CSRF attack. If CSRF protection is enabled, you should see an error.</p>
