<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first(); 

        if(!$user){
            return response()->json(['status' => 'error', 'message' => 'User Not Fount'], 401);
        }

        if(Hash::check($request->password, $user->password)){
            $user->update(['api_token' => str_random(50)]);
            return response()->json(['status' => 'success', 'user' => $user], 200);
        }

        return response()->json(['status' => 'error', 'message' => 'Invalid Passowrd'], 401);
    }

    public function logout(Request $request)
    {
        $api_token = $request->api_token;

        $user = User::where('api_token', $api_token)->first();
        if(!$user){
            return response()->json(['status' => 'error', 'message' => 'Not Logged In'], 401);
        }
        $user->api_token = "";
        $user->save();

        return response()->json(['status' => 'success', 'message' => 'You are now logged out'], 200);
    }

    public function mainSidebar() 
    {
        $test = User::all();

        return response()->json(['test' => $test]);
    }
}
