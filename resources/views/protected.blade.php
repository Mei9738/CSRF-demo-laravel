<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Form Result</title>
</head>
<body>
    <h1>Protected Form Submitted</h1>
    <p>This form used CSRF protection. Here's the submitted data:</p>

    <pre>
        {{ print_r($data, true) }}
    </pre>

    <a href="/demo">Back to Demo</a>
</body>
</html>
