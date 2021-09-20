<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\SliderHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendSliderController extends Controller
{
    public function index(){
        return response()->json(['sliderList'=>SliderHelper::list(3)]);
    }
}