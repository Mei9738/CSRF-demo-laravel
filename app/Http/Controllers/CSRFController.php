<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSRFController extends Controller
{
    public function showScene(Request $request)
    {
        // Retrieve the step parameter from the request, defaulting to 1
        $step = $request->input('step', 1);

        // Check if the step parameter is valid
        if (!in_array($step, [1, 2, 'phishing', 'phishing-success', 3])) {
            return redirect()->route('csrf.demo', ['step' => 1])->with('error', 'Invalid step provided.');
        }

        // Load the appropriate view with the step information
        return view('csrf-demo', ['step' => $step]);
    }
}
