<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[ // Validate the request
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|string|max:25|confirmed',
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('auth-token');
        $userData = new UserResource($user); // Corrected to use UserResource for a single user

        return response()->json([
            'token' => $token->plainTextToken,
            'user' => $userData
        ]);
    }

    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the current request...
        $request->user()->currentAccessToken()->delete();
        return response()->json(["code"=>'SUCCESS'], 200);
    }

    // Login a user
    public function login(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:5|max:30'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 409);
        }
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('auth-token')->plainTextToken; // Correctly assign plainTextToken to variable
            $userData = new UserResource($user);
            return response()->json([
                'token' => $token,
                'user' => $userData
            ]);
        } else {
            return response()->json(['msg' => 'Invalid credentials'], 401);
        }
    }
}
