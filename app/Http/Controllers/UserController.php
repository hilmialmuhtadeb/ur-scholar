<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(UserPostRequest $request) {
        $user = $request->all();
        // $user["password"] = bcrypt($request->password);

        // User::create($user);
        // return redirect()->back();
    }
}
