<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ManagementHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ManagementRequest;
use App\Http\Resources\ManagementResource;
use App\Models\Management;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ManagementController extends Controller
{
     //Management list view
     public function index(){
        $managementList  = ManagementHelper::list();
        return response()->json(compact('managementList'));
    } // end method

    //Management single  view
    public function show($id){
        //get single Management via id
        $managementDetails = Management::find($id);

        // serialize management  data
        $managementDetails = new ManagementResource($managementDetails);

        return response()->json(compact('managementDetails'));
    }//end method

    //Management add  method
    public function store(ManagementRequest $request){

        //Management Developer request data
        $managementData = $this->getData($request);

         //if request has profile photo then upload
         if($request->hasFile('profile_photo') && $request->profile_photo->isValid()){

            //save upload image via function which will return image name
            $image_new_name = $this->makeUploadImage($request->profile_photo,'images/management/');

            //then add new Image name to array
            $managementData['profile_photo'] = $image_new_name;
        }
        try{
            //save new Management
            Management::create($managementData);

            //then send success response
            return response()->json(['success'=>"Managment has been Successfully Added"]);
        }
        catch(Exception $e){
            dump($e->getMessage());
            // if any error occured then send error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } //end method


    //Software Developer update method
    public function update(ManagementRequest $request,$mangement_id){
        $management  = Management::find($mangement_id);
        if(!$management){
            return response()->json(['error'=>"Mangement Data Not Found"],404);
        }
        try{
            // get software request data
            $managementData = $this->getData($request);

            //if request has profile photo then upload
            if($request->hasFile('profile_photo') && $request->profile_photo->isValid()){
                if(file_exists(public_path('images/management/'.$management->profile_photo))){
                    unlink(public_path('images/management/'.$management->profile_photo));
                }
                //save upload image via function which will return image name
                $image_new_name = $this->makeUploadImage($request->profile_photo,'images/management/');

                //then add image name to array
                $managementData['profile_photo'] = $image_new_name;
            }
            else{
                //else add previous image to array
                $managementData['profile_photo'] = $management->profile_photo;
            }

            //update single software developer data
            $management->update($managementData);

            //then send success response
            return response()->json(['success'=>"Management has been updated successfully!"]);
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
        $image_new_name = time()."_management_".'.'.$extension;

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
            'email'             => $request->input('email'),
            'phone_number'      => $request->input('phone_number')
        );
        return $softwareTeamData;
    }//end method



    // management  delete method
    public function destroy($management_id){
        try{
           //delete single management developer via id
            Management::where('id',$management_id)->first()->delete();

            //then send success response
            return response()->json(['success'=>"Management has been Deleted successfully!"]);
        }catch(Exception $e){
            dump($e->getMessage());

            //if any error occured then send error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } // end method
}