<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jobs = Job::orderBy('created_at','DESC')->get();
        return view('admin.job.index',compact('jobs'));
    }

    public function add_view(){
        return view('admin.job.create');
    }

    public function submit(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'job_name'               => 'required',
            'location'               => 'required',
            'job_type'               => 'required',
            'description_en'         => 'required',
            'description_in'         => 'required',
            'status'                 => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $job = Job::create([
           'name'               =>$request->job_name,
           'location'           =>$request->location,
           'job_type'           =>$request->job_type,
           'description_en'     =>$request->description_en,
           'description_in'     =>$request->description_in,
           'status'             =>$request->status,
            'slug'              => Utils::slugify($request->job_name),
        ]);

        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $job = Job::where('slug',$request->slug)->first();
        return view('admin.job.edit',compact('job'));
    }

    public function update(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'job_name'               => 'required',
            'location'               => 'required',
            'job_type'               => 'required',
            'description_en'         => 'required',
            'description_in'         => 'required',
            'status'                 => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $job = Job::where('id',$request->job_id)->first();

        $job->name             = $request->job_name;
        $job->location         = $request->location;
        $job->job_type         = $request->job_type;
        $job->description_en   = $request->description_en;
        $job->description_in   = $request->description_in;
        $job->status           = $request->status;
        $job->slug             = Utils::slugify($request->job_name);
        $job->save();

        return $this->successResponse();
    }

    public function delete(Request $request){
        $job = Job::find($request->id);
        $job->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
