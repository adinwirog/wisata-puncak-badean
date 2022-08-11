<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            return redirect()->intended('dashboard');
        }
        return view('auth.signin');
    }

    public function login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);
        
        $credential = $request->only('email','password');
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');
        }

        return redirect('login')->withErrors(['login_gagal' => 'Failed To Login']);
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
