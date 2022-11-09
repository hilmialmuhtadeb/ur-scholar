<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view('pages/auth/register');
    }

    public function store(UserPostRequest $request) {
        $user = $request->all();
        $user["password"] = bcrypt($request->password);

        User::create($user);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect(route('home'))->with('success', 'Yey, akun berhasil dibuat');
        }
        
        return redirect(route('login'))->with('success', 'Yey, akun berhasil dibuat');
    }
}
