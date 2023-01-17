<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = About::first();
        return view('admin.about.create',compact('about'));
    }
    public function add(Request $request){

        $validation = Validator::make($request->all(), [
            'title_en'                  => 'required',
            'title_in'                  => 'required',
            'description_en'            => 'required',
            'description_in'            => 'required',
            'short_description_en'      => 'required',
            'short_description_in'      => 'required',
            'youtube_video_id'          => 'required',
        ]);

        $about = About::first();

        if($about == null){
            $data = About::create($request->all());
        }else{
            $about->fill($request->all());
            $about->save();
        }

        return $this->successResponse();
    }
}
