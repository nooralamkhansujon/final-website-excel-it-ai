<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactRequest $request){

        Mail::to($request->email)
             ->send(new ContactMail(message:$request->message,subject:$request->subject,name:$request->name));

        return response()->json(['success'=>"Email Send Successfully"]);
    }
}