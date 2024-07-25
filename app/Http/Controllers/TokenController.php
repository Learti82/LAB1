<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TokenController extends Controller
{
    public function generateToken($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }
}
