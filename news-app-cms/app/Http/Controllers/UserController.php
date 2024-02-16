<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        # find user by email
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        if (!Hash::check($request->password, $user -> password_hash)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
       
        // Generate a custom JWT token
        $customPayload = [
            'user_id' => $user->id,
            'email' =>  $user->email,
            'role' => 'admin',
            'exp' => \Carbon\Carbon::now()->addHours(2)->timestamp,
        ];


        $payload = JWTFactory::sub('token')->data($customPayload)->make();
        $token = JWTAuth::encode($payload)->get(); 

        if (!$token) {
            return response()->json(['error' => 'Unable to generate token'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'token' => $token,
            'user' => $user,
            'token_type' => 'bearer',
        ]);
    }

    ## get my profile
    public function getProfile(Request $request)
    {
        $auth = $request->user;

        $user = User::find($auth['user_id']);
        return response()->json(['user' => $user]);
    }
}