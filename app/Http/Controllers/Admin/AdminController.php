<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Models\Admin;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function updateProfile(AdminProfileRequest $request,$admin_id){

        try{
            $admin = Admin::find($admin_id);
            $getData = array(
                'name'        => $request->input('name'),
                'email'       => $request->input('email'),
                'designation' => $request->input('designation'),
                'phone'       => $request->input('phone'),
            );

            if($request->hasFile('avater') && $request->avater->isValid() ){

                if(isset($admin->avater) && file_exists(public_path('images/admins/'.$admin->avater))){
                    unlink(public_path('images/admins/'.$admin->avater));
                }

                //add new image to getData array and save image to a specific folder
                $image_ext          = $request->avater->getClientOriginalExtension();
                $getData['avater']  = time().'admin'.'.'.$image_ext;
                $request->avater->move(public_path('images/admins'),$getData['avater']);
            }


            // if request has password then add password for updating
            if($request->has('password')){
                $getData['password']  = bcrypt($request->input('password'));
            }

            //update admin profile
            $admin->update($getData);
            return response()->json(['success'=>"Your Profile has been updated successfully"]);
        }catch(Exception $e){
            dump($e->getMessage());
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }


    }
}
