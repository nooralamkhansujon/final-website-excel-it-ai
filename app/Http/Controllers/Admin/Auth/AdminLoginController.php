<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password'=> 'required|string|min:6'
        ]);

        ///log in the if credential is correct
        $admin  = Admin::where('email', $request->input('email'))->first();

        if (!$admin || !Hash::check($request->input('password'), $admin->password)) {
            return response()->json(['error'=>"Email or Password is not valid"],422);
        }
        //update admin last login and then save
        $admin_token = $admin->createToken("excel it ai")->plainTextToken;
        return response()->json(compact('admin_token'));

    }
}

