<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Management;
use App\Models\Milestone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MilestoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('get_value');
    }

    public function index()
    {
        $milestones = Milestone::orderBy('created_at','DESC')->get();
        return view('admin.milestone.index',compact('milestones'));
    }

    public function add_view(Request $request){
        return view('admin.milestone.create');
    }
    public function submit(Request $request){

        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'milestone_name'             => 'required',
            'description_en'            => 'required',
            'description_in'            => 'required',
            'image'                     => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4000',
            'status'                    => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/milestone/';

        if ($request->hasFile('image')) {
            $image = uniqid().'.'.$request->image->extension();
            $image = $request->image->move($path, $image);
        }

        $milestone = Milestone::create([
            'name' => $request->milestone_name,
            'description_en' => $request->description_en,
            'description_in' => $request->description_in,
            'image' => $image,
            'status' => $request->status,
        ]);
        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $milestone = Milestone::where('id',$request->id)->first();
        return view('admin.milestone.edit',compact('milestone'));
    }

    public function update(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'milestone_name'            => 'required',
            'description_en'            => 'required',
            'description_in'            => 'required',
            'status'                    => 'required',
            'image'                     => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
        ]);
        $path = 'images/milestone/';
        $milestone = Milestone::where('id',$request->milestone_id)->first();

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        if ($request->hasFile('image')) {

            $image_upload = uniqid().'.'.$request->image->extension();
            $image = $request->image->move($path, $image_upload);
            $milestone->image = $image;
        }


        $milestone->name            = $request->milestone_name;
        $milestone->description_en  = $request->description_en;
        $milestone->description_in  = $request->description_in;
        $milestone->status          = $request->status;
        $milestone->save();
        return $this->successResponse();
    }

    public function delete(Request $request){
        $milestone = Milestone::find($request->id);
        $milestone->delete();
        return redirect()->back()->with('success', 'deleted success');
    }

    public function get_value(Request $request){
        $milestone = Milestone::where('id',$request->milestone_id)->first();
        $data['milestone'] = $milestone;
//        echo $request->lang;

        if($request->lang == 'en'){
            $data['description'] = $milestone->description_en;
        }else{
            $data['description'] = $milestone->description_in;
        }

        $data['image'] = asset($milestone->image);
        return $this->successResponse($data);
    }
}
