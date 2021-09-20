<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyForJobRequest;
use App\Mail\ApplyForJobMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplyForJobController extends Controller
{
    public function applyJob(ApplyForJobRequest $request){
    //   dd($request->file('cv'));

      if($request->hasFile('cv') && $request->cv->isValid()){
          $extension  = $request->cv->extension();
          $pdf_image  =  time()."_pdf_image_".$request->cv->getClientOriginalName().'.'.$extension;

          //set i
          $pdf_url = public_path('images/pdf/'.$pdf_image);
          $request->cv->move(public_path('images/pdf'),$pdf_image);
      }
        Mail::to($request->email)
             ->send(new ApplyForJobMail(
                name:$request->name,
                phone_number:$request->phone_number,
                emailColumn:$request->email,
                subject:$request->subject,
                career:$request->career,
                message:$request->message,
                cv:$pdf_url
            ));

        if(file_exists($pdf_url)){
            unlink($pdf_url);
        }

        return response()->json(['success'=>"Email Send Successfully"]);
    }
}