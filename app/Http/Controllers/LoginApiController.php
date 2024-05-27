<?php

namespace App\Http\Controllers;
// use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;



class LoginApiController extends Controller
{
    public function apiLogin(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string', 
            'password' => 'required|string',
        ]);

        $credentials = $request->only('password');
        $identifier = $request->input('identifier');
        $attemptField = filter_var($identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (!Auth::attempt([$attemptField => $identifier] + $credentials)) {
            throw ValidationException::withMessages([
                'identifier' => ['The provided credentials are incorrect.'],
            ]);
        }


        $user = $request->user();
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            // 'token' => $token,
            'message' => 'true',
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'alamat' => $user->alamat,
                'token' => $token
            ],
        ], 200);
    }
}
