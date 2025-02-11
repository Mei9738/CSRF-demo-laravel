<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Intro</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Ensure the content takes up at least the full height of the viewport */
        html, body {
            height: 100%;
            margin: 0;
            scroll-behavior: smooth;
        }

        /* Use flexbox to position content and footer */
        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }

        .side-menu {
            position: fixed;
            top: 100px;
            left:   3em;
            width: 200px;
        }
        .side-menu a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            border-left: 3px solid transparent;
        }
        .side-menu a:hover {
            background: #f8f9fa;
            border-left-color: #007bff;
        }

        /* Styling for the footer */
        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            padding: 20px;
        }

    </style>
        
</head>
<body>
@include('components.navbar') <!-- Include Navbar -->
<nav class="fixed top-24 left-12 w-48 hidden md:block">
    <h5 class="font-bold">CSRF Guide</h5>
    <a href="#intro" class="block py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-transparent hover:border-blue-500">Introduction</a>
    <a href="#impact" class="block py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-transparent hover:border-blue-500">Impact</a>
    <a href="#how-it-works" class="block py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-transparent hover:border-blue-500">How it Works</a>
    <a href="#defenses" class="block py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-transparent hover:border-blue-500">Defenses</a>
    <a href="#csrf-tokens" class="block py-3 text-gray-700 hover:bg-gray-100 border-l-4 border-transparent hover:border-blue-500">CSRF tokens</a>
</nav>


<div class="container mx-auto px-4 pt-20 mt-10 max-w-3xl">
    <!-- Intro Card-->
    <div class="bg-white shadow-lg rounded-lg p-6" id="intro">
        <h2 class="text-center text-2xl font-bold">Understanding CSRF in Laravel</h2>
        <p class="text-gray-500 text-center">A guide to Cross-Site Request Forgery (CSRF) & Laravel's built-in protection</p>
        <img src="{{ asset('images/csrf-illustration.svg') }}" alt="CSRF Attack Illustration" class="mx-auto my-4">
        
        <h3 class="text-xl font-semibold">What is CSRF?</h3>
        <p class="mt-2">Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they are authenticated.</p>
        
        <h4 class="mt-4 font-semibold">💡 Example Scenario:</h4>
        <p>A logged-in user of a banking website could be tricked into clicking a malicious link that transfers money to an attacker.</p>
        
        <h3 class="text-xl font-semibold mt-6">How Does CSRF Work?</h3>
        <ul class="list-disc ml-6 mt-2">
            <li>A victim is logged into a website.</li>
            <li>An attacker tricks them into clicking a malicious link or loading an image that sends an unintended request.</li>
            <li>Since the user is authenticated, the request is processed as legitimate.</li>
        </ul>
        
        <h3 class="text-xl font-semibold mt-6">Laravel's CSRF Protection</h3>
        <p>Laravel uses CSRF tokens to validate form submissions. These tokens prevent malicious requests by ensuring they originate from the authenticated user.</p>
        
        <h4 class="mt-4 font-semibold">✅ Safe Form Example:</h4>
        <pre class="bg-gray-100 p-3 rounded">
            &lt;form action="/submit" method="POST"&gt;
                @csrf
                &lt;input type="text" name="name" required&gt;
                &lt;button type="submit"&gt;Submit&lt;/button&gt;
            &lt;/form&gt;
        </pre>
        
        <h4 class="mt-4 font-semibold">🔴 Unsafe Example:</h4>
        <pre class="bg-gray-100 p-3 rounded">
            &lt;img src="https://bank.com/transfer?amount=1000&to=attacker" /&gt;
        </pre>
        
        <p>Without a CSRF token, Laravel rejects the request, preventing unauthorized actions.</p>
        
        <a href="{{ route('csrf.demo') }}" class="block text-center bg-blue-500 text-white py-2 px-4 rounded mt-4 hover:bg-blue-600">Try the CSRF Demo</a>
    </div>

    <!-- Impact Part -->
    <div class="bg-white shadow-lg rounded-lg p-6 mt-6" id="impact">
        <h3 class="text-xl font-semibold">Impact of CSRF</h3>
        <p class="mt-2">In a successful CSRF attack, the attacker causes the victim user to carry out an action unintentionally. This could include changing account settings, modifying passwords, or making unauthorized transactions. If the victim has a privileged role, the attacker may gain control over the entire application.</p>
    </div>

    <!-- How CSRF works Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 mt-6" id="how-it-works">
        <h3 class="text-xl font-semibold">🔍 How CSRF Works</h3>
        <p>For a CSRF attack to be possible, three key conditions must be in place:</p>
        <ul class="list-disc ml-6 mt-2">
            <li>✅<strong> A relevant action.</strong> There is an action within the application that the attacker has a reason to induce.</li>
            <li>✅<strong>Cookie-based session handling.</strong> The application relies solely on session cookies to identify the user.</li>
            <li>✅<strong> No unpredictable request parameters.</strong> The attacker can determine or guess the necessary request parameters.</li>
        </ul>
        <p class="mt-4">Example request that allows CSRF:</p>
        <pre class="bg-gray-100 p-3 rounded">
            POST /email/change HTTP/1.1
            Host: vulnerable-website.com
            Content-Type: application/x-www-form-urlencoded
            Content-Length: 30
            Cookie: session=yvthwsztyeQkAPzeQ5gHgTvlyxHfsAfE

            email=wiener@normal-user.com
                    </pre>
                    <p class="mt-4">The attacker can construct the following malicious page:</p>
                    <pre class="bg-gray-100 p-3 rounded">
            &lt;html&gt;
                &lt;body&gt;
                    &lt;form action="https://vulnerable-website.com/email/change" method="POST"&gt;
                        &lt;input type="hidden" name="email" value="pwned@evil-user.net" /&gt;
                    &lt;/form&gt;
                    &lt;script&gt;
                        document.forms[0].submit();
                    &lt;/script&gt;
                &lt;/body&gt;
            &lt;/html&gt;
        </pre>
        <p class="mt-4">If a victim visits this page while logged into the vulnerable website, their email will be changed.</p>
    </div>

    <!-- Defenses Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 mt-6" id="defenses">
        <h3 class="text-xl font-semibold">🛡️ Defenses Against CSRF</h3>
        <p>Mitigating CSRF attacks typically involves implementing security measures at both the application and browser levels. The most common defenses include:</p>
        <ul class="list-disc ml-6 mt-2">
            <li>✅<strong> CSRF tokens.</strong> Unique, secret values included in requests to validate authenticity.</li>
            <li>✅<strong>SameSite cookies.</strong> Prevents cross-site cookie inclusion unless explicitly allowed.</li>
            <li>✅<strong>Referer-based validation.</strong> Checks if the request originated from a trusted source.</li>
        </ul>
        <h4 class="text-lg font-semibold mt-4">How Laravel Handles CSRF</h4>
        <p class="mt-2">Laravel includes built-in CSRF protection by generating and verifying tokens for each form submission.</p>
        <p>To include a CSRF token in your form, use:</p>
        <pre class="bg-gray-100 p-3 rounded">@csrf</pre>
        <p class="mt-2">Example form with CSRF protection:</p>
        <pre class="bg-gray-100 p-3 rounded">
            &lt;form method="POST" action="/profile/update"&gt;
                @csrf
                &lt;input type="text" name="name" placeholder="Enter your name"&gt;
                &lt;button type="submit"&gt;Update&lt;/button&gt;
            &lt;/form&gt;
        </pre>
    </div>

    <!-- CSRF tockens Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 mt-6" id="csrf-tokens">
        <h2 class="text-center text-2xl font-bold">CSRF Tokens</h2>
        <p class="mt-2">The most robust way to defend against CSRF attacks is to include a CSRF token within relevant requests. The token must meet the following criteria:</p>
        
        <h3 class="text-xl font-semibold mt-4">Usage of CSRF Tokens</h3>
        <ul class="list-disc ml-6 mt-2">
            <li>✅ Unpredictable with high entropy, as for session tokens in general</li>
            <li>✅ Tied to the user's session.</li>
            <li>✅ Strictly validated in every case before the relevant action is executed</li>
        </ul>

        <h3 class="text-xl font-semibold mt-4">How Should CSRF Tokens Be Generated?</h3>
        <p class="mt-2">CSRF tokens should contain significant entropy and be strongly unpredictable, with the same properties as session tokens in general.
        You should use a cryptographically secure pseudo-random number generator (CSPRNG), seeded with the timestamp when it was created plus a static secret.</p>

        <p class="mt-2">If you need further assurance beyond the strength of the CSPRNG, you can generate individual tokens by concatenating its output with some user-specific entropy and taking a strong hash of the whole structure. This presents an additional barrier to an attacker who attempts to analyze the tokens based on a sample that are issued to them.</p>

        <h3 class="text-xl font-semibold mt-4">How Should CSRF Tokens Be Transmitted?</h3>
        <p class="mt-2">CSRF tokens should be treated as secrets and handled in a secure manner throughout their lifecycle. An approach that is normally effective is to transmit the token to the client within a hidden field of an HTML form that is submitted using the POST method. The token will then be included as a request parameter when the form is submitted:</p>
        <pre class="bg-gray-100 p-3 rounded">&lt;input type="hidden" name="csrf-token" value="CIwNZNlR4XbisJF39I8yWnWX9wX4WFoz"&gt;</pre>
    </div>
</div>

@include('components.footer') <!-- Include Footer -->
</body>
</html>
