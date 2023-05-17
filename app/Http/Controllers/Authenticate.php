<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Authenticate extends Controller
{
    public function index(Request $request){
        $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    $token = $user->createToken('my-token')->accessToken;

    $response =[
        'user' => $user,
        'token' => $token
    ];

        return response($response,201);
    }
}
