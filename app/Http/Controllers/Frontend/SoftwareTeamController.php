<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\SoftwareTeamHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoftwareTeamController extends Controller
{
    public function index(){
        return response()->json(['softwareTeamList'=>SoftwareTeamHelper::list()]);
    }
}