<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user) {
        $scholarships = Scholarship::where('user_id', $user->id)->get();
        return view('pages/user/show', [
            'user' => $user,
            'scholarships' => $scholarships
        ]);
    }

    public function update(Request $request, User $user) {
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if ($password != null && $password == $password_confirmation) {
            $user->update([
                'name' => $request->name,
                'password' => bcrypt($request->password)
            ]);
        } else {
            $user->update([
                'name' => $request->name,
            ]);
        }
        
        return redirect(route('user.show', $user->id))->with('success', 'Yey, akun berhasil diperbarui');
    }
}
