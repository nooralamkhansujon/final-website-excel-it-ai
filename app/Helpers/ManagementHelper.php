<?php
namespace App\Helpers;

use App\Http\Resources\ManagementResource;
use App\Models\Management;

class ManagementHelper {
   public static  function list($limit=0){
       if($limit == 0 ){
           return ManagementResource::collection(Management::all());
       }
       return ManagementResource::collection(Management::limit($limit)->get());

    } // end method

}

?>