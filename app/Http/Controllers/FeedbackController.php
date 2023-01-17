<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Business;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $feedbacks = Feedback::with('business')->orderBy('created_at','DESC')->get();
        return view('admin.feedback.index',compact('feedbacks'));
    }

    public function add_view(){
        $businesses = Business::where('status','active')->orderBy('created_at','DESC')->get();
        return view('admin.feedback.create',compact('businesses'));
    }

    public function submit(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'business_name'         => 'required',
            'feedback_name'         => 'required',
            'description_en'        => 'required',
            'description_in'        => 'required',
            'feedback_en'           => 'required',
            'feedback_in'           => 'required',
            'image_upload'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'status'                => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/feedback/';

        if ($request->hasFile('image_upload')) {
            $image = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image);
        }

        $feedback = Feedback::create([
            'business_id'       => $request->business_name,
            'name'              => $request->feedback_name,
            'description_en'    => $request->description_en,
            'description_in'    => $request->description_in,
            'feedback_en'       => $request->feedback_en,
            'feedback_in'       => $request->feedback_in,
            'image'             => $image,
            'status'            => $request->status,
        ]);
        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $businesses = Business::where('status','active')->orderBy('created_at','DESC')->get();
        $feedback = Feedback::where('id',$request->id)->first();
        return view('admin.feedback.edit',compact('feedback','businesses'));
    }

    public function update(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'business_name'         => 'required',
            'feedback_name'         => 'required',
            'description_en'        => 'required',
            'description_in'        => 'required',
            'feedback_en'           => 'required',
            'feedback_in'           => 'required',
            'status'                => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/feedback/';
        $feedback = Feedback::where('id',$request->feedback_id)->first();

        if ($request->hasFile('image_upload')) {

            $image_upload = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image_upload);
            $feedback->image_upload = $image;
        }

        $feedback->business_id          = $request->business_name;
        $feedback->name                 = $request->feedback_name;
        $feedback->description_en       = $request->description_en;
        $feedback->description_in       = $request->description_in;
        $feedback->feedback_en          = $request->feedback_en;
        $feedback->feedback_in          = $request->feedback_in;
        $feedback->status               = $request->status;
        $feedback->save();
        return $this->successResponse();
    }

    public function delete(Request $request){

        $feedback = Feedback::find($request->id);
        $feedback->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
