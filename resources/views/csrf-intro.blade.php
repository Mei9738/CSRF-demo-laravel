<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Intro</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            left: 3em;
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

<body class="bg-gray-50 font-sans ">
@include('components.navbar') <!-- Include Navbar -->
<nav class="fixed top-24 left-12 w-48 hidden md:block">
    <h5 class="font-bold">CSRF Content</h5>
    <a href="#intro" class="block py-3 pl-3 text-gray-700 hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500">Introduction</a>
    <a href="#impact" class="block py-3 pl-3 text-gray-700 hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500">Impact</a>
    <a href="#how-it-works" class="block py-3 pl-3 text-gray-700 hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500">How it Works</a>
    <a href="#defenses" class="block py-3 pl-3 text-gray-700 hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500">Defenses</a>
    <a href="#csrf-tokens" class="block py-3 pl-3 text-gray-700 hover:bg-gray-50 border-l-4 border-transparent hover:border-blue-500">CSRF Tokens</a>
</nav>

<div class="container mx-auto px-8 pt-20 mt-10 max-w-7xl">
    <!-- Intro Card-->
    <div class="bg-white shadow-lg rounded-lg p-8" id="intro">
        <h2 class="text-center text-3xl font-bold">Understanding CSRF in Laravel</h2>  
        <p class="text-center text-gray-700 font-normal">A guide to Cross-Site Request Forgery (CSRF) & Laravel's built-in protection</p>
        <img src="{{ asset('images/csrf-illustration.svg') }}" alt="CSRF Attack Illustration" class="mx-auto my-6">  
        
        <h3 class="text-2xl font-semibold">What is CSRF?</h3>  
        <p class="mt-4 text-gray-700 font-normal">Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web 
            application in which they’re currently authenticated. With a little help of social engineering (such as sending a link via email or chat), an attacker 
            may trick the users of a web application into executing actions of the attacker’s choosing. If the victim is a normal user, a successful CSRF attack can 
            force the user to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative 
            account, CSRF can compromise the entire web application.</p>
        
        <h3 class="mt-6 font-semibold flex items-center">
            <span class="inline-block w-5 h-5 mr-2 text-yellow-500">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 017 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z" />
                </svg>
            </span>
            Example Scenario:
        </h3>  
        <p class="text-gray-700 font-normal">A logged-in user of a banking website could be tricked into clicking a malicious link that transfers money to an attacker.</p>
        
        <h3 class="text-2xl font-semibold mt-8">How Does CSRF Work?</h3>  
        <ul class="list-disc ml-8 mt-4">  
            <li>A victim is logged into a website.</li>
            <li>An attacker tricks them into clicking a malicious link or loading an image that sends an unintended request.</li>
            <li>Since the user is authenticated, the request is processed as legitimate.</li>
        </ul>
        
        <h3 class="text-2xl font-semibold mt-8 mb-2">Laravel's CSRF Protection</h3>  
        <p class= "text-gray-700 font-normal">Laravel uses CSRF tokens to validate form submissions. These tokens prevent malicious requests by ensuring they originate from the authenticated user.</p>
        
        <h4 class="mt-6 font-semibold"><span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>Protected Form Example:</h4>

        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>
                    &lt;form action="/submit" method="POST"&gt;
                        @@csrf
                        &lt;input type="text" name="name" required&gt;
                        &lt;button type="submit"&gt;Submit&lt;/button&gt;
                    &lt;/form&gt;
                    </code>
                </pre>
            </div>
        </div>

        <h4 class="mt-6 font-semibold flex items-center">
            <span class="inline-block w-5 h-5 mr-2 text-red-500">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <circle cx="12" cy="12" r="10" />
                </svg>
            </span>
            Vulnerable Form Example:
        </h4>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto mb-6">
                <pre class="whitespace-pre-wrap bg-gray-800 pt-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>
                        &lt;form action="/submit" method="POST"&gt;
                            &lt;input type="text" name="name" required&gt;
                            &lt;button type="submit"&gt;Submit&lt;/button&gt;
                        &lt;/form&gt;
                    </code>
                </pre>
            </div>
        </div>
        
        <p class="mt-6 text-center text-gray-700">
            You can get a better understanding by 
            <a href="{{ route('csrf.demo') }}" class="text-blue-500 hover:text-blue-600 transition-colors duration-200 inline-flex items-center">
                going through our lab
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </p>
    </div>

    <!-- Impact Part -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8" id="impact">  
        <h3 class="text-2xl font-semibold">Impact of CSRF</h3>  
        <p class="mt-4 text-gray-700 font-normal">In a successful CSRF attack, the attacker causes the victim user to carry out an action unintentionally. This could include changing account settings, modifying passwords, or making unauthorized transactions. If the victim has a privileged role, the attacker may gain control over the entire application.</p>
    </div>

    <!-- How CSRF works Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8" id="how-it-works">
        <h3 class="text-2xl font-semibold flex items-center mb-2">
            <span class="inline-block w-6 h-6 mr-2 text-blue-500">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 001.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 00-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 005.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg>
            </span>
            How CSRF Works
        </h3>
        
        <figure class="wp-block-image size-large my-6 ">
            <img fetchpriority="high" decoding="async" width="1024" height="576" src="https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack-1024x576.png" alt="how does cross-site request forgery csrf work" class="wp-image-23174 mx-auto" srcset="https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack-1024x576.png 1024w, https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack-300x169.png 300w, https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack-768x432.png 768w, https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack-1536x864.png 1536w, https://brightsec.com/wp-content/uploads/2021/06/CSRF-attack.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px">
        </figure>
        <p class="text-gray-700 font-normal">For a CSRF attack to be possible, three key conditions must be in place:</p>
        <ul class="list-disc ml-8 mt-4">  
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong> A relevant action.</strong> There is an action within the application that the attacker has a reason to induce.
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong> Cookie-based session handling.</strong> The application relies solely on session cookies to identify the user.
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong> No unpredictable request parameters.</strong> The attacker can determine or guess the necessary request parameters.
                </div>
            </li>
        </ul>
        <p class="mt-6 mb-2 font-semibold">Vulnerable Request (Server-Side):</p>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>
                    POST /email/change HTTP/1.1
                    Host: vulnerable-website.com
                    Content-Type: application/x-www-form-urlencoded
                    Content-Length: 30
                    Cookie: session=yvthwsztyeQkAPzeQ5gHgTvlyxHfsAfE

                    email=wiener@normal-user.com
                    </code>
                </pre>
            </div>
        </div>

        <p class="mt-6 mb-2 font-semibold">Attacker’s Trick (Client-Side)</p>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>
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
                    </code>
                </pre>
            </div>
        </div>

        <p class="mt-6 text-gray-700 font-normal">If a victim visits this page while logged into the vulnerable website, their email will be changed.</p>
    </div>

    <!-- Defenses Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8" id="defenses">  
        <h3 class="text-2xl font-semibold mb-2">
            <span class="inline-block w-6 h-6 mr-2 text-blue-500">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" />
                </svg>
            </span>
            Defenses Against CSRF
        </h3>  
        <p class="text-gray-700 font-normal">Mitigating CSRF attacks typically involves implementing security measures at both the application and browser levels. The most common defenses include:</p>
        <ul class="list-none ml-8 mt-4">
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong>CSRF tokens.</strong> Unique, secret values included in requests to validate authenticity.
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong>SameSite cookies.</strong> Prevents cross-site cookie inclusion unless explicitly allowed.
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    <strong>Referer-based validation.</strong> Checks if the request originated from a trusted source.
                </div>
            </li>
        </ul>
        <h4 class="text-xl font-semibold mt-6">How Laravel Handles CSRF</h4>  
        <p class="mt-4 text-gray-700 font-normal">Laravel includes built-in CSRF protection by generating and verifying tokens for each form submission.</p>
        <p class="mb-4 text-gray-700 font-normal">To include a CSRF token in your form, use:</p>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>@@CSRF</code>
                </pre>
            </div>
        </div>

        <p class="mt-4 mb-2 text-gray-700 font-normal">Example form with CSRF protection:</p>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>
                    &lt;form method="POST" action="/profile/update"&gt;
                        @@csrf
                        &lt;input type="text" name="name" placeholder="Enter your name"&gt;
                        &lt;button type="submit"&gt;Update&lt;/button&gt;
                    &lt;/form&gt;
                    </code>
                </pre>
            </div>
        </div>

    </div>

    <!-- CSRF tokens Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-8" id="csrf-tokens">  
        <h2 class="text-center text-3xl font-bold">CSRF Tokens</h2>  
        <p class="mt-4 text-gray-700 font-normal">The most robust way to defend against CSRF attacks is to include a CSRF token within relevant requests. The token must meet the following criteria:</p>
        
        <h3 class="text-2xl font-semibold mt-6">Usage of CSRF Tokens</h3>  
        <ul class="list-none ml-8 mt-4">
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    Unpredictable with high entropy, as for session tokens in general
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    Tied to the user's session.
                </div>
            </li>
            <li class="flex items-start">
                <span class="inline-block w-5 h-5 mr-2 text-green-500">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <div>
                    Strictly validated in every case before the relevant action is executed
                </div>
            </li>
        </ul>

        <h3 class="text-2xl font-semibold mt-6">How Should CSRF Tokens Be Generated?</h3>  
        <p class="mt-4">CSRF tokens should contain significant entropy and be strongly unpredictable, with the same properties as session tokens in general.
        You should use a cryptographically secure pseudo-random number generator (CSPRNG), seeded with the timestamp when it was created plus a static secret.</p>

        <p class="mt-4 text-gray-700 font-normal">If you need further assurance beyond the strength of the CSPRNG, you can generate individual tokens by concatenating its output with some user-specific entropy and taking a strong hash of the whole structure. This presents an additional barrier to an attacker who attempts to analyze the tokens based on a sample that are issued to them.</p>

        <h3 class="text-2xl font-semibold mt-6">How Should CSRF Tokens Be Transmitted?</h3>  
        <p class="mt-4 mb-2 text-gray-700 font-normal">CSRF tokens should be treated as secrets and handled in a secure manner throughout their lifecycle. An approach that is normally effective is to transmit the token to the client within a hidden field of an HTML form that is submitted using the POST method. The token will then be included as a request parameter when the form is submitted:</p>
        <div class="max-w-4xl mx-auto text-white rounded-lg mt-2">
            <div class="overflow-x-auto">
                <pre class="whitespace-pre-wrap bg-gray-800 p-4 pb-1 rounded-md text-sm font-mono text-gray-100">
                    <code>&lt;input type="hidden" name="csrf-token" value="CIwNZNlR4XbisJF39I8yWnWX9wX4WFoz"&gt;</code>
                </pre>
            </div>
        </div>
    </div>
</div>

@include('components.footer') <!-- Include Footer -->
</body>
</html>