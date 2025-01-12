<x-navbar />
<h1>CSRF Demo</h1>

<h2>Unprotected Form</h2>
<form action="/demo/unprotected" method="POST">
    <input type="text" name="data" placeholder="Enter something">
    <button type="submit">Submit (Unprotected)</button>
</form>

<h2>Protected Form</h2>
<form action="/demo/protected" method="POST">
    @csrf
    <input type="text" name="data" placeholder="Enter something">
    <button type="submit">Submit (Protected)</button>
</form>

<a href="/">Back to Home</a>
