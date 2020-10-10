<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    function login(Request $request) {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    
       
        $token = $user->createToken($request->device_name, ['role:list'])->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function registration(Request $request) {
        
        $request->validate([
            'email' => 'required|email',
            'name'=>'required',
            'password' => 'required',
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        
        $response = [
            'message' => "Sucess",
        ];

        return response($response, 201);
    }

    function profile(Request $request) {

        $user = $request->user();
        $response = [
            'user' => $user,
        ];
        return response($response, 201);
    }
}
