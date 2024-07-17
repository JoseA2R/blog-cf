<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XssController extends Controller
{
    public function xss(Request $request)
    {
        $script = $request->get('script');
        return view('xss', ['script' => $script]);
    }
}
