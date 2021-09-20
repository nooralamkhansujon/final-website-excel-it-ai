<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SoftwareTeamHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SoftwareTeamReqest;
use App\Http\Requests\SoftwareTeamRequest;
use App\Http\Resources\SoftwareResource;
use App\Models\SoftwareTeam;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SoftwareTeamController extends Controller
{
    //Software Team list view
    public function index(){
        $softwareTeamList = SoftwareTeamHelper::list();
        return response()->json(compact('softwareTeamList'));
    } // end method

    // Software Team single  view
    public function show($id){
        //get single software developer via id
        $softwareTeamDetails = SoftwareTeam::find($id);
        // serialize software developer data
        $softwareTeamDetails = new SoftwareResource($softwareTeamDetails);
        return response()->json(compact('softwareTeamDetails'));
    }//end method

    //Software Team add leave method
    public function store(SoftwareTeamRequest $request){

        //get software developer request data
        $softwareTeamData = $this->getData($request);

         //if request has profile photo then upload
         if($request->hasFile('profile_photo') && $request->profile_photo->isValid()){

            //save uplaod image via function which will return image name
            $image_new_name = $this->makeUploadImage($request->profile_photo,'images/softwareteam/');

            //then add new Image name to array
            $softwareTeamData['profile_photo'] = $image_new_name;
        }
        try{
            //save new software team
            SoftwareTeam::create($softwareTeamData);

            //then send success response
            return response()->json(['success'=>"Software Team has been Successfully Added"]);
        }
        catch(Exception $e){
            dump($e->getMessage());
            // if any error occured then send error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } //end method


    //Software Developer update method
    public function update(SoftwareTeamRequest $request,$softwareTeam_id){
        $softwareTeam  = SoftwareTeam::find($softwareTeam_id);
        if(!$softwareTeam){
            return response()->json(['error'=>"Software Team Data Not Found"],404);
        }
        try{
            // get software request data
            $softwareTeamData = $this->getData($request);

            //if request has profile photo then upload
            if($request->hasFile('profile_photo') && $request->profile_photo->isValid()){
                if(file_exists(public_path('images/softwareteam/'.$softwareTeam->profile_photo))){
                    unlink(public_path('images/softwareteam/'.$softwareTeam->profile_photo));
                }
                //save upload image via function which will return image name
                $image_new_name = $this->makeUploadImage($request->profile_photo,'images/softwareteam/');

                //then add image name to array
                $softwareTeamData['profile_photo'] = $image_new_name;
            }
            else{
                //else add previous image to array
                $softwareTeamData['profile_photo'] = $softwareTeam->profile_photo;
            }

            //update single software developer data
            $softwareTeam->update($softwareTeamData);

            //then send success response
            return response()->json(['success'=>"Software Team has been updated successfully!"]);
        }catch(Exception $e){
            dump($e->getMessage());

            //if any error occured then send error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }



    }//end method

     // for uploading image method
    private function makeUploadImage($image,$path){
        //get upload image extension
        $extension     = $image->getClientOriginalExtension();

        //create new image name
        $image_new_name = time()."softwareteam_".'.'.$extension;

        $image_resize = Image::make($image->getRealPath())->resize(200,200);
        $image_resize->save(public_path($path.$image_new_name));

        //then return image;
        return $image_new_name;
    }//end method

    // get request data for add or update as refactor
    private function getData(Request $request){
        $softwareTeamData = array(
            'name'              => $request->input('name'),
            'designation'       => $request->input('designation'),
            'employee_id'       => $request->input('employee_id'),
            'email'             => $request->input('email'),
            'phone_number'      => $request->input('phone_number')
        );
        return $softwareTeamData;
    }//end method



    // Employee leave delete method
    public function destroy($softwareteam_id){
        try{
           //delete single software developer via id
            SoftwareTeam::where('id',$softwareteam_id)->first()->delete();

            //then send success response
            return response()->json(['success'=>"Software has been Deleted successfully!"]);
        }catch(Exception $e){
            dump($e->getMessage());

            //if any error occured then send error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } // end method
}