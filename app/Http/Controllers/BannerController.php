<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $banners = Banner::orderBy('created_at','DESC')->get();
        return view('admin.banner.index',compact('banners'));
    }

    public function add_view(){
        return view('admin.banner.create');
    }

    public function submit(Request $request){

        $validation = Validator::make($request->all(), [
            'image_upload'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'mobile_image_upload'   => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'status'                => 'required',
            'sequence'              => 'required|integer',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/banner/';

        if ($request->hasFile('image_upload')) {
            $image_upload = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image_upload);
        }

        if ($request->hasFile('mobile_image_upload')) {
            $mobile_image_upload = uniqid().'.'.$request->mobile_image_upload->extension();
            $mobile_image = $request->mobile_image_upload->move($path, $mobile_image_upload);
        }

        $banner = Banner::create([
            'image' => $image,
            'mobile_image' => $mobile_image,
            'link'  => $request->link,
            'status' => $request->status,
            'sequence' => $request->sequence,
        ]);
        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $banner = Banner::where('id',$request->id)->first();
        return view('admin.banner.edit',compact('banner'));
    }

    public function update(Request $request){

        $path = 'images/banner/';
        $banner = Banner::where('id',$request->banner_id)->first();
        if ($request->hasFile('image_upload')) {
            $image_upload = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image_upload);
            $banner->image            = $image;
        }

        if ($request->hasFile('mobile_image_upload')) {
            $mobile_image_upload = uniqid().'.'.$request->mobile_image_upload->extension();
            $mobile_image = $request->mobile_image_upload->move($path, $mobile_image_upload);
            $banner->mobile_image    = $mobile_image;
        }

        $banner->link                = $request->link;
        $banner->status              = $request->status;
        $banner->sequence            = $request->sequence;
        $banner->save();
        return $this->successResponse();
    }

    public function test(Request $request){
        $utils = Utils::cdn_auth();
        echo $utils->accessToken;
    }
    public function delete(Request $request){
        $banner = Banner::find($request->id);
        $banner->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
