<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt($request->except('token'))) {
            $user = User::where('email', $request->email)->first();
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } else {
            return response()->json([
                'status_code' => 403,
                'message' => 'unauthorized'
            ]);
        }
    }
}
