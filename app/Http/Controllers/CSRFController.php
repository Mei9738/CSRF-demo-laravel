<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSRFController extends Controller
{
    public function showScene(Request $request)
    {
        // Get the current step, default to 1
        $step = $request->query('step', 1);

        if ($step === 'phishing-success') {
            // Retrieve submitted form data
            $submittedData = $request->only(['name', 'address', 'phone']);
            return view('csrf-demo', [
                'step' => $step,
                'submittedData' => $submittedData,
            ]);
        }

        // Return the Blade view with the current step
        return view('csrf-demo', ['step' => $step]);
    }
}
