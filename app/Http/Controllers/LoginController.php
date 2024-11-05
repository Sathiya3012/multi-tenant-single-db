<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::login($user);

            return response()->json([
                'message' => 'Logged in successfully',
                'tenant_id' => $user->tenant_id,
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
