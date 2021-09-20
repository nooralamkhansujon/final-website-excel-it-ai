<?php
namespace App\Helpers;

use App\Http\Resources\SoftwareResource;
use App\Models\SoftwareTeam;

class SoftwareTeamHelper {
   public static  function list($limit=0){
       if($limit == 0 ){
           return SoftwareResource::collection(SoftwareTeam::all());
       }
       return SoftwareResource::collection(SoftwareTeam::limit($limit)->get());

    } // end method

}

?>