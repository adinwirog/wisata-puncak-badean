<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }

    public function login(Request $request)
    {
        # code...
    }
}