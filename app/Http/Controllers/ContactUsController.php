<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function submit(Request $request){
        $validation = Validator::make($request->all(), [
            'name'                  => 'required',
            'email'                 => 'required',
            'phone'                 => 'required',
            'message'               => 'required',
            'g_recaptcha_response'  => 'required'
        ]);
        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ];
        Mail::to(env('CONTACT_EMAIL_ADDRESS','info@autopedia.id'))
            ->send(new ContactMail($details));
        return $this->successResponse();
    }
}