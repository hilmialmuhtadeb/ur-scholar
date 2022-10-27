<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request) {
        $credemtials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credemtials)) {
            return redirect(route('home'));
        }

        return back()->withErrors([
            'login' => 'email atau password anda tidak sesuai.'
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect(route('home'));
    }
}
