<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SliderHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class SliderController extends Controller
{
    //Slider list view
    public function index(){
        $sliderList = SliderHelper::list();
        return response()->json(compact('sliderList'));
    } // end method

    // slider single   view
    public function show($id){
        $slider = Slider::find($id);
        $sliderDetails = new SliderResource($slider);
        // dd($sliderDetails);
        return response()->json(compact('sliderDetails'));
    }//end method

    //Slider Add  method
    public function store(SliderRequest $request){

        //get slider data from getData function
        $sliderData = $this->getData($request);

        //if request has profile photo then upload
        if($request->hasFile('slider_img') && $request->slider_img->isValid()){
            //get uploaded image name
            $image_new_name = $this->makeUploadImage($request->slider_img,'images/slider/');

            //add image name to slider data array
            $sliderData['slider_img'] = $image_new_name;
        }
        try{
            //create new slider
            Slider::create($sliderData);
            //then return success response
            return response()->json(['success'=>"Slider has been Successfully Added"]);
        }
        catch(Exception $e){
            //if any error occured then send response as error
            dump($e->getMessage());
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } //end method


    //Slider update method
    public function update(SliderRequest $request,$slider_id){
        //get slider via id
        $slider  = Slider::find($slider_id);

        //if slider not found then show error
        if(!$slider){
            return response()->json(['error'=>"Slider Data Not Found"],404);
        }
        try{

            //get slider data
            $sliderData = $this->getData($request);

            //if request has slider_img  then upload
            if($request->hasFile('slider_img') && $request->slider_img->isValid()){
                if(file_exists(public_path('images/slider/'.$slider->slider_img))){
                    unlink(public_path('images/slider/'.$slider->slider_img));
                }
                //get uploaded image name
                $image_new_name = $this->makeUploadImage($request->slider_img,'images/slider/');


                //add new image name to array
                $sliderData['slider_img'] = $image_new_name;
            }
            else{
                //otherwise add previous image
                $sliderData['slider_img'] = $slider->slider_img;
            }

            //update slider data
            $slider->update($sliderData);

            //then return success response
            return response()->json(['success'=>"Slider has been updated successfully!"]);
        }catch(Exception $e){
            dump($e->getMessage());

            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }



    }//end method

    // for uploading image method
    private function makeUploadImage($image,$path){
        //get upload image extension
        $extension     = $image->getClientOriginalExtension();

        //create new image name
        $image_new_name = time()."slider_".'.'.$extension;

        //resize the upload image via Image facades
        $resize_image = Image::make($image->getRealPath())->resize(700,500);

        //save resize image in specific path
        $resize_image->save(public_path($path.$image_new_name));

        //then return image;
        return $image_new_name;
    }//end method

    // get request data for add or update as refactor
    private function getData(Request $request){
        $sliderData = array(
            'slider_title'           => $request->input('slider_title'),
            'slider_description'     => $request->input('slider_description'),
        );
        return $sliderData;
    }//end method



    // Slider  delete method
    public function destroy($slider_id){
        try{
            //delete slider via id
            Slider::where('id',$slider_id)->first()->delete();

            //then return success response
            return response()->json(['success'=>"Slider has been Deleted successfully!"]);

        }catch(Exception $e){
            dump($e->getMessage());
            //if any error occured then return error response
            return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
        }

    } // end method
}