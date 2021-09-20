<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogOutController extends Controller
{
    public function logout(Request $request){
        try{
            $this->guard()->user()->tokens()->delete();
            return response()->json(['success'=>"You are logout successfully"],200);
        }
        //if some error occured then catch the error and response 500 error
        catch(Exception $e){
            return response()->json(['error'=>"Some Error occured for logout - ".$e->getMessage()],500);
        }

    }

    private function guard(){
        return Auth::guard('sanctum');
    }
}
