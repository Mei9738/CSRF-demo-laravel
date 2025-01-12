<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unprotected Form</title>
</head>
<body>
    <h1>Unprotected Form Submission</h1>
    @if($message)
        <p style="color: red;">{{ $message }}</p>
    @endif

    @if($data)
        <p>Submitted Data:</p>
        <pre>{{ print_r($data, true) }}</pre>
    @else
        <p>No data was submitted because of the CSRF error.</p>
    @endif

    <a href="/about">Learn More About CSRF</a> | <a href="/demo">Back to Demo</a>
</body>
</html>
