<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        {{-- Scene Content --}}
        @if ($step == 1)
            {{-- Scene 1: User Logs In --}}
            <h1 class="text-2xl font-bold mb-4">Scene 1: The User Logs In</h1>
            <p class="mb-6">
                Yesterday, you logged into your account on your favorite website—let’s call it "SecureSite." 
                You entered your credentials, and everything worked fine. You went about your day, and now today, 
                you’re still logged in, your session is still active.
            </p>
            <a href="{{ route('csrf.demo', ['step' => 2]) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Next
            </a>

        @elseif ($step == 2)
            {{-- Scene 2: Suspicious Email --}}
            <h1 class="text-2xl font-bold mb-4">Scene 2: You Receive a Suspicious Email</h1>
            <p class="mb-6">This morning, as you're browsing the web, you get an email in your inbox:</p>
            <div class="bg-gray-100 p-4 rounded border mb-6">
                <p><strong>Subject:</strong> "Important: Your password reset request"</p>
                <p>Hello [Your Name],</p>
                <p>
                    We received a request to reset your password. If you made this request, click the link below to reset your password:
                </p>
                <a href="{{ route('csrf.demo', ['step' => 'phishing']) }}" class="text-blue-500 hover:underline">
                    Click Here to Reset Your Password
                </a>
                <p class="mt-4">If you didn't request a password reset, please disregard this email.</p>
                <p>Best regards,<br>The SecureSite Team</p>
            </div>
            <!-- <a href="{{ route('csrf.demo', ['step' => 3]) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Next
            </a> -->

        @elseif ($step == 'phishing')
            {{-- Scene 3: Phishing Page --}}
            <h1 class="text-2xl font-bold mb-4">Scene 3: Phishing Page</h1>
            <p class="mb-6">Welcome to the fake SecureSite password reset page. Enter your details below:</p>
            <form action="{{ route('csrf.demo', ['step' => 'phishing-success']) }}" method="POST" class="bg-gray-100 p-4 rounded border">
                @csrf
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name:</label>
                <input type="text" id="name" name="name" class="mt-2 p-2 w-full border rounded mb-4" placeholder="Full Name" value="John Doe">

                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <input type="text" id="address" name="address" class="mt-2 p-2 w-full border rounded mb-4" placeholder="123 Fake Street" value="123 Fake Street">

                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <input type="text" id="phone" name="phone" class="mt-2 p-2 w-full border rounded mb-4" placeholder="+123456789" value="+123456789">

                <label for="password" class="block text-sm font-medium text-gray-700">Enter New Password:</label>
                <input type="password" id="password" name="password" class="mt-2 p-2 w-full border rounded mb-4" placeholder="New Password">

                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Your New Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" class="mt-2 p-2 w-full border rounded" placeholder="Confirm Password">

                <button type="submit" class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Update
                </button>
            </form>

        @elseif ($step == 'phishing-success')
            {{-- Scene 4: Phishing Success --}}
            <h1 class="text-2xl font-bold mb-4">Scene 4: Details Updated Successfully</h1>
            <p class="mb-6">Your details have been updated. Thank you!</p>
            <div class="bg-gray-100 p-4 rounded border">
                <p><strong>Name:</strong> {{ request('name') }}</p>
                <p><strong>Address:</strong> {{ request('address') }}</p>
                <p><strong>Phone Number:</strong> {{ request('phone') }}</p>
                <p><strong>Password:</strong> {{ request('password') }}</p>
            </div>
            <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Start Over
            </a>

        @else
            {{-- Invalid Step --}}
            <h1 class="text-2xl font-bold text-red-500">Invalid Scene</h1>
            <p>Please start the demo again.</p>
            <a href="{{ route('csrf.demo', ['step' => 1]) }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Start Over
            </a>
        @endif
    </div>
</body>
</html>
