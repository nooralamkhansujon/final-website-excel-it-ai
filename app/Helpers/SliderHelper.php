<?php
namespace App\Helpers;

use App\Http\Resources\SliderResource;
use App\Models\Slider;

class SliderHelper {
   public static  function list($limit=0){
        if($limit == 0 ){
            return SliderResource::collection(Slider::all());
        }
        return SliderResource::collection(Slider::limit($limit)->get());

    } // end method

}

?>