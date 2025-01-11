<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index () {
        return view('demo');
    }

    public function unprotected(Request $request) {
        return view('419', ['data' => $request->all()]);
    }

    public function protected(Request $request) {
        return view('protected', ['data' => $request->all()]);
    }
}
