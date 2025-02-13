<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;


class ProfileController extends Controller
{
    // Display the vulnerable form (no CSRF token)
    public function showVulnerableForm()
    {
        return view('profile-vulnerable');
    }

    // Handle the vulnerable form submission
    // public function submitVulnerableForm(Request $request)
    // {
    //     return 'Profile updated (vulnerable form): ' . $request->input('name');
    // }
    public function submitVulnerableForm(Request $request)
    {
        // Find the demo record by ID
        $demo = Demo::find(1); // Assuming the ID is 1

        if ($demo) {
            // Update the name field with the submitted data
            $demo->name = $request->input('name');
            $demo->save(); // Save the updated record

            // Redirect back with a success message
            return redirect()->route('csrf.demo', ['step' => 'Lets_Test_It'])->with('success', 'Name updated successfully.');
        }

        // If demo not found, return an error message
        return redirect()->route('csrf.demo', ['step' => 'Lets_Test_It'])->with('error', 'Demo data not found.');
    }



    // Show the protected form
    public function showProtectedForm()
    {
        return view('profile-protected');
    }

    // Handle the protected form submission
    // public function submitProtectedForm(Request $request)
    // {
    //     return 'Profile updated (protected form): ' . $request->input('name');
    // }
    // Handle the protected form submission
    public function submitProtectedForm(Request $request)
    {
        // Find the demo record by ID
        $demo = Demo::find(1); // Assuming the ID is 1

        if ($demo) {
            // Update the name field with the submitted data
            $demo->name = $request->input('name');
            $demo->save(); // Save the updated record

            // Redirect back with a success message
            return redirect()->route('csrf.demo', ['step' => 'Lets_Test_It'])->with('success', 'Name updated successfully.');
        }
        // If demo not found, return a JSON response with an error message
        return redirect()->route('csrf.demo', ['step' => 'Lets_Test_It'])->with('error', 'Demo data not found.');
    }
}
