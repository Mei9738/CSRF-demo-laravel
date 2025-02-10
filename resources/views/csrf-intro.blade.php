<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Intro</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
@include('components.navbar') <!-- Include your Navbar -->
<nav class="col-md-2 d-none d-md-block side-menu">
    <h5>CSRF Guide</h5>
    <a href="#intro">Introduction</a>
    <a href="#impact">Impact</a>
    <a href="#how-it-works">How it Works</a>
    <a href="#defenses">Defenses</a>
    <a href="#csrf-tokens">CSRF tokens</a>
</nav>

<div class="container content pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Intro Card-->
                <div class="card p-4" id="intro">
                    <h2 class="text-center">Introduction to CSRF in Laravel</h2>
                    <p class="text-muted text-center">Understanding Cross-Site Request Forgery (CSRF) & Laravel's Protection</p>

                    <img src="{{ asset('images/csrf-illustration.svg') }}" alt="CSRF Attack Illustration" class="illustration">

                    <h4>What is CSRF?</h4>
                    <p>Cross-Site Request Forgery (CSRF) is a security vulnerability that tricks a victim into submitting an unauthorized request to a web application where they are authenticated.</p>

                    <h5>💡 Example Scenario:</h5>
                    <p>Imagine a banking website where you are logged in. If an attacker tricks you into clicking a malicious link while logged in, they can potentially perform an action (like transferring money) **without your consent**.</p>

                    <h4>How Does CSRF Work?</h4>
                    <ul>
                        <li>A victim is **logged into** a trusted website (e.g., a bank).</li>
                        <li>An attacker sends a malicious link or embeds a request in an email or website.</li>
                        <li>The victim **clicks** the link, unknowingly sending a request to the bank.</li>
                        <li>The request is executed **because the victim is authenticated**, leading to an unauthorized action.</li>
                    </ul>

                    <h4>How Laravel Protects Against CSRF</h4>
                    <p>Laravel automatically includes CSRF protection in forms. When a form is submitted, Laravel expects a special **CSRF token** to validate the request.</p>

                    <h5>✅ Safe Form Example:</h5>
                    <pre class="bg-light p-3">
                        &lt;form action="/submit" method="POST"&gt;
                            @csrf
                            &lt;input type="text" name="name" required&gt;
                            &lt;button type="submit"&gt;Submit&lt;/button&gt;
                        &lt;/form&gt;
                    </pre>

                    <h5>🔴 Unsafe Request (CSRF Attack Example):</h5>
                    <pre class="bg-light p-3">
                    &lt;img src="https://bank.com/transfer?amount=1000&to=attacker" /&gt;
                    </pre>
                    <p>Since no CSRF token is present, Laravel will **reject the request**.</p>

                    <h4>Conclusion</h4>
                    <p>CSRF is a dangerous attack that can exploit authenticated users. However, **Laravel automatically protects** against it using **CSRF tokens**. Always use `@csrf` in your forms!</p>

                    <a href="{{ route('csrf.demo') }}" class="btn btn-primary d-block text-center mt-4">Try the CSRF Demo</a>
                </div>

                <!-- Impact Card-->
                <div class="card p-4 mt-4" id="impact">
                    <h4>Impact of CSRF</h4>
                    <p>In a successful CSRF attack, the attacker causes the victim user to carry out an action unintentionally. For example, this might be to change the email address on their account, to change their password, or to make a funds transfer. Depending on the nature of the action, the attacker might be able to gain full control over the user's account. If the compromised user has a privileged role within the application, then the attacker might be able to take full control of all the application's data and functionality.</p>
                </div>

                <!-- How Card-->
                <div class="card p-4 mt-4" id="how-it-works">
                    <h4>🔍 How CSRF works</h4>
                    <p>For a CSRF attack to be possible, three key conditions must be in place:</p>
                    <ul>
                        <li>✅<strong> A relevant action.</strong> There is an action within the application that the attacker has a reason to induce.</li>
                        <li>✅<strong>Cookie-based session handling.</strong> The application relies solely on session cookies to identify the user.</li>
                        <li>✅<strong> No unpredictable request parameters.</strong> The attacker can determine or guess the necessary request parameters.</li>
                    </ul>
                    <p>Example request that allows CSRF:</p>
                    <pre class="bg-light p-3">
                        POST /email/change HTTP/1.1
                        Host: vulnerable-website.com
                        Content-Type: application/x-www-form-urlencoded
                        Content-Length: 30
                        Cookie: session=yvthwsztyeQkAPzeQ5gHgTvlyxHfsAfE

                        email=wiener@normal-user.com
                    </pre>
                    <p>The attacker can construct the following malicious page:</p>
                    <pre class="bg-light p-3">
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
                    <p>If a victim visits this page while logged into the vulnerable website, their email will be changed.</p>
                </div>

                <!-- Defenses Card-->
                <div class="card p-4 mt-4" id="defenses">
                    <h4>Defenses Against CSRF</h4>
                    <p>Nowadays, successfully finding and exploiting CSRF vulnerabilities often involves bypassing anti-CSRF measures deployed by the target website, the victim's browser, or both. The most common defenses you'll encounter are as follows:</p>
                    <ul>
                        <li>✅<strong> CSRF tokens.</strong> A CSRF token is a unique, secret, and unpredictable value that is generated by the server-side application and shared with the client. When attempting to perform a sensitive action, such as submitting a form, the client must include the correct CSRF token in the request. This makes it very difficult for an attacker to construct a valid request on behalf of the victim.</li>
                        <li>✅<strong>SameSite cookies.</strong> SameSite is a browser security mechanism that determines when a website's cookies are included in requests originating from other websites. As requests to perform sensitive actions typically require an authenticated session cookie, the appropriate SameSite restrictions may prevent an attacker from triggering these actions cross-site. Since 2021, Chrome enforces Lax SameSite restrictions by default. As this is the proposed standard, we expect other major browsers to adopt this behavior in future.</li>
                        <li>✅<strong> Referer-based validation.</strong> Some applications make use of the HTTP Referer header to attempt to defend against CSRF attacks, normally by verifying that the request originated from the application's own domain. This is generally less effective than CSRF token validation.</li>
                    </ul>
                    <p>Example request that allows CSRF:</p>
                </div>

                <!-- csrf-tokens Card-->
                <div class="card p-4 mt-4" id="csrf-tokens">
                    <h2 class="text-center">CSRF tokens</h2>
                    <p>The most robust way to defend against CSRF attacks is to include a CSRF token within relevant requests. The token must meet the following criteria:</p>
                    <h4>Usage of CSRF tokens</h4>
                    <ul>
                        <li>Unpredictable with high entropy, as for session tokens in general</li>
                        <li>Tied to the user's session.</li>
                        <li>Strictly validated in every case before the relevant action is executed</li>
                    </ul>

                    <h4>How should CSRF tokens be generated?</h4>
                    <p>TCSRF tokens should contain significant entropy and be strongly unpredictable, with the same properties as session tokens in general.
                    You should use a cryptographically secure pseudo-random number generator (CSPRNG), seeded with the timestamp when it was created plus a static secret.

                    If you need further assurance beyond the strength of the CSPRNG, you can generate individual tokens by concatenating its output with some user-specific entropy and take a strong hash of the whole structure. This presents an additional barrier to an attacker who attempts to analyze the tokens based on a sample that are issued to them.</p>

                    <h4>How should CSRF tokens be transmitted?</h4>
                    <p>CSRF tokens should be treated as secrets and handled in a secure manner throughout their lifecycle. An approach that is normally effective is to transmit the token to the client within a hidden field of an HTML form that is submitted using the POST method. The token will then be included as a request parameter when the form is submitted:</p>
                    <pre class="bg-light p-3">&lt;input type="hidden" name="csrf-token" value="CIwNZNlR4XbisJF39I8yWnWX9wX4WFoz"&gt;</pre>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let sections = document.querySelectorAll(".content .card"); 
        let menuLinks = document.querySelectorAll(".side-menu a");

        // Hide all sections except the first one
        sections.forEach((section, index) => {
            if (index !== 0) section.style.display = "none";
        });

        menuLinks.forEach((link, index) => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default anchor behavior

                let targetId = this.getAttribute("href").substring(1); // Get section ID
                sections.forEach(section => {
                    section.style.display = "none"; // Hide all sections
                });

                document.getElementById(targetId).style.display = "block"; // Show target section
            });
        });
    });
</script>

</body>
</html>
