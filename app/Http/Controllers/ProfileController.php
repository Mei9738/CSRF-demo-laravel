<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Display the vulnerable form (no CSRF token)
    public function showVulnerableForm()
    {
        return view('profile-vulnerable');
    }

    // Handle the vulnerable form submission
    public function submitVulnerableForm(Request $request)
    {
        return 'Profile updated (vulnerable form): ' . $request->input('name');
    }

    // Show the protected form
    public function showProtectedForm()
    {
        return view('profile-protected');
    }

    // Handle the protected form submission
    public function submitProtectedForm(Request $request)
    {
        return 'Profile updated (protected form): ' . $request->input('name');
    }
}
