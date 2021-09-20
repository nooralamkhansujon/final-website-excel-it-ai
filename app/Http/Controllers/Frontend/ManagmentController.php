<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\ManagementHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagmentController extends Controller
{
    public function index(){
        return response()->json(['managementList'=>ManagementHelper::list()]);
    }
}