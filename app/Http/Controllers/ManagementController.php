<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Business;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $managements = Management::orderBy('created_at','DESC')
            ->get();
        return view('admin.management.index',compact('managements'));
    }

    public function add_view(){
        return view('admin.management.create');
    }

    public function submit(Request $request){

        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'management_name'           => 'required',
            'position_en'               => 'required',
            'position_in'               => 'required',
            'description_en'            => 'required',
            'description_in'            => 'required',
            'image'                     => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'image_banner'              => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'image_mobile'              => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000',
            'division'                  => 'required',
            'status'                    => 'required',
            'sequence'                  => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/management/';

        if ($request->hasFile('image')) {
            $image = uniqid().'.'.$request->image->extension();
            $image = $request->image->move($path, $image);
        }
        if ($request->hasFile('image_banner')) {
            $image_banner= uniqid().'.'.$request->image_banner->extension();
            $image_banner = $request->image_banner->move($path, $image_banner);
        }
        $image_mobile = '';
        if ($request->hasFile('image_mobile')) {
            $image_mobile= uniqid().'.'.$request->image_mobile->extension();
            $image_mobile = $request->image_mobile->move($path, $image_mobile);
        }

        $management = Management::create([
            'name' => $request->management_name,
            'position_en' => $request->position_en,
            'position_in' => $request->position_in,
            'description_en' => $request->description_en,
            'description_in' => $request->description_in,
            'image' => $image,
            'image_banner' => $image_banner,
            'image_mobile' => $image_mobile,
            'division' => $request->division,
            'slug' => Utils::slugify($request->management_name),
            'status' => $request->status,
            'sequence' => $request->sequence,
        ]);
        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $management = Management::where('slug',$request->slug)->first();
        return view('admin.management.edit',compact('management'));
    }
    public function update(Request $request){

        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'management_name'           => 'required',
            'position_en'               => 'required',
            'position_in'               => 'required',
            'description_en'            => 'required',
            'description_in'            => 'required',
            'division'                  => 'required',
            'status'                    => 'required',
            'image'                     => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'image_banner'              => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'image_mobile'              => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'sequence'                  => 'required',
        ]);
        $path = 'images/management/';
        $management = Management::where('id',$request->management_id)->first();

        if ($request->hasFile('image')) {

            $image_upload = uniqid().'.'.$request->image->extension();
            $image = $request->image->move($path, $image_upload);
            $management->image = $image;
        }

        if ($request->hasFile('image_banner')) {

            $image_banner = uniqid().'.'.$request->image_banner->extension();
            $image_banner = $request->image_banner->move($path, $image_banner);
            $management->image_banner = $image_banner;
        }

        if ($request->hasFile('image_mobile')) {

            $image_mobile = uniqid().'.'.$request->image_mobile->extension();
            $image_mobile = $request->image_mobile->move($path, $image_mobile);
            $management->image_mobile = $image_mobile;
        }

        $management->name            = $request->management_name;
        $management->position_en     = $request->position_en;
        $management->position_in     = $request->position_in;
        $management->description_en  = $request->description_en;
        $management->description_in  = $request->description_in;
        $management->division        = $request->division;
        $management->status          = $request->status;
        $management->slug            = Utils::slugify($request->management_name);
        $management->sequence        = $request->sequence;
        $management->save();
        return $this->successResponse();
    }

    public function delete(Request $request){
        $management = Management::find($request->id);
        $management->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
