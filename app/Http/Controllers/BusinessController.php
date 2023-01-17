<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Business;
use App\Models\BusinessFeatures;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $businesses = Business::sequence()->get();
        return view('admin.business.index',compact('businesses'));
    }
    public function add_view(){
        return view('admin.business.create');
    }

    public function submit(Request $request){

        $user = Auth::user();
        $validation = Validator::make($request->all(), [

            'business_name'         => 'required',
            'short_description_en'  => 'required',
            'short_description_in'  => 'required',
            'description_en'        => 'required',
            'description_in'        => 'required',
            'logo_image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'product_image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'thumbnail_image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'banner_image'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'banner_image_mobile'   => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'status'                => 'required',
            'sequence'              => 'required|integer',
            'features_title_en'     => 'required',
            'features_title_in'     => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/business/';

        $logo_image = '';
        if ($request->hasFile('logo_image')) {
            $logo_image = uniqid().'.'.$request->logo_image->extension();
            $logo_image = $request->logo_image->move($path, $logo_image);
        }

        $product_image = '';
        if ($request->hasFile('product_image')) {
            $product_image = uniqid().'.'.$request->product_image->extension();
            $product_image = $request->product_image->move($path, $product_image);
        }

        $thumbnail_image = '';
        if ($request->hasFile('thumbnail_image')) {
            $thumbnail_image = uniqid().'.'.$request->thumbnail_image->extension();
            $thumbnail_image = $request->thumbnail_image->move($path, $thumbnail_image);
        }

        $banner_image = '';
        if ($request->hasFile('banner_image')) {
            $banner_image = uniqid().'.'.$request->banner_image->extension();
            $banner_image = $request->banner_image->move($path, $banner_image);
        }

        $banner_image_mobile = '';
        if ($request->hasFile('banner_image_mobile')) {
            $banner_image_mobile = uniqid().'.'.$request->banner_image_mobile->extension();
            $banner_image_mobile = $request->banner_image_mobile->move($path, $banner_image_mobile);
        }

        $product = Business::create([
            'title' => $request->business_name,
            'description_en' => $request->description_en,
            'description_in' => $request->description_in,
            'short_description_en' => $request->short_description_en,
            'short_description_in' => $request->short_description_in,
            'logo_image' => $logo_image,
            'product_image' => $product_image,
            'thumbnail_image' => $thumbnail_image,
            'banner_image' => $banner_image,
            'banner_image_mobile' => $banner_image_mobile,
            'status' => $request->status,
            'slug' => Utils::slugify($request->business_name),
            'sequence' => $request->sequence,
            'features_title_en' => $request->features_title_en,
            'features_title_in' => $request->features_title_in,
            'features_description_en' => $request->features_description_en,
            'features_description_in' => $request->features_description_in,
        ]);

        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $business = Business::where('slug',$request->slug)->first();
        $features = BusinessFeatures::where('business_id',$business->id)->orderBy('created_at','DESC')->get();
        $feature = BusinessFeatures::where('business_id',$business->id)->first();
        return view('admin.business.edit',compact('business','features','feature'));
    }

    public function update(Request $request){

        $business = Business::where('id',$request->business_id)->first();

        $validation = Validator::make($request->all(), [
            'business_name'          => 'required',
            'slug'                   => 'required|unique:businesses,slug,'.$business->id,
            'short_description_en'   => 'required',
            'short_description_in'   => 'required',
            'description_en'         => 'required',
            'description_in'         => 'required',
            'status'                 => 'required',
            'sequence'               => 'required|integer',
            'features_title_en'      => 'required',
            'features_title_in'      => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/business/';

        if ($request->hasFile('logo_image')) {
            $logo_image = uniqid().'.'.$request->logo_image->extension();
            $logo_image = $request->logo_image->move($path, $logo_image);
            $business->logo_image = $logo_image;
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnail_image = uniqid().'.'.$request->thumbnail_image->extension();
            $thumbnail_image = $request->thumbnail_image->move($path, $thumbnail_image);
            $business->thumbnail_image = $thumbnail_image;
        }

        if ($request->hasFile('product_image')) {
            $product_image = uniqid().'.'.$request->product_image->extension();
            $product_image = $request->product_image->move($path, $product_image);
            $business->product_image = $product_image;
        }

        if ($request->hasFile('banner_image')) {
            $banner_image = uniqid().'.'.$request->banner_image->extension();
            $banner_image = $request->banner_image->move($path, $banner_image);
            $business->banner_image = $banner_image;
        }

        if ($request->hasFile('banner_image_mobile')) {
            $banner_image_mobile = uniqid().'.'.$request->banner_image_mobile->extension();
            $banner_image_mobile = $request->banner_image_mobile->move($path, $banner_image_mobile);
            $business->banner_image_mobile = $banner_image_mobile;
        }

        $business->title                    = $request->business_name;
        $business->short_description_en     = $request->short_description_en;
        $business->short_description_in     = $request->short_description_in;
        $business->description_en           = $request->description_en;
        $business->description_in           = $request->description_in;
        $business->status                   = $request->status;
        $business->slug                     = $request->slug;
        $business->sequence                 = $request->sequence;
        $business->features_title_en        = $request->features_title_en;
        $business->features_title_in        = $request->features_title_in;
        $business->features_description_en  = $request->features_description_en;
        $business->features_description_in  = $request->features_description_in;
        $business->save();

        return $this->successResponse();
    }

    public function submit_features(Request $request){

        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'features_title_en'         => 'required',
            'features_title_in'         => 'required',
            'fe_description_en'         => 'required',
            'fe_description_in'         => 'required',
            'image_upload_fea'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',

        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/business/features/';

        if ($request->hasFile('image_upload_fea')) {
            $image_upload = uniqid().'.'.$request->image_upload_fea->extension();
            $image = $request->image_upload_fea->move($path, $image_upload);
        }

        $features = BusinessFeatures::create([
            'business_id'               =>$request->business_id,
            'features_title'            =>$request->features_title_en,
            'features_title_in'         =>$request->features_title_in,
            'features_description_en'   =>$request->fe_description_en,
            'features_description_in'   =>$request->fe_description_in,
            'features_status'           =>$request->fe_status,
            'features_image'            =>$image,
        ]);

        return $this->successResponse();

    }

    public function get_features(Request $request){
        $business_id =  $request->business_id;
        $business_feature = BusinessFeatures::where('id',$business_id)->first();
        return $this->successResponse($business_feature);
    }

    public function update_features(Request $request){

        $validation = Validator::make($request->all(), [
            'features_title_edit_en'        => 'required',
            'features_title_edit_in'        => 'required',
            'fe_description_en_edit'        => 'required',
            'fe_description_in_edit'        => 'required',
        ]);
        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/business/features/';
        $business_features = BusinessFeatures::where('id',$request->business_features_id)->first();
        if ($request->hasFile('image_upload_fea_edit')) {
            $image_upload = uniqid().'.'.$request->image_upload_fea_edit->extension();
            $image = $request->image_upload_fea_edit->move($path, $image_upload);
            $business_features->features_image = $image;
        }

        $business_features->features_title = $request->features_title_edit_en;
        $business_features->features_title_in = $request->features_title_edit_in;
        $business_features->features_description_en =  $request->fe_description_en_edit;
        $business_features->features_description_in = $request->fe_description_in_edit;
        $business_features->features_status = $request->fe_status_edit;
        $business_features->save();
        return $this->successResponse();
    }

    public function delete(Request $request){

        $business_features = BusinessFeatures::where('business_id',$request->id)->get();
        foreach ($business_features as $bf){
            $bf->delete();
        }

        $feedbacks = Feedback::where('business_id',$request->id)->get();
        foreach ($feedbacks as $feedback){
            $feedback->delete();
        }

        $business = Business::find($request->id);
        $business->delete();
        return redirect()->back()->with('success', 'deleted success');
    }

}
