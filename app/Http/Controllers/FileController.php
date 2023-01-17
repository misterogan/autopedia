<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => [
            'view'
        ]]);
    }

    public function index(){

        $files = File::with('subcategory')->orderBy('created_at','DESC')->get();
        return view('admin.file.index',compact('files'));
    }

    public function add_view(Request $request){
        $subcategories = SubCategory::where('status','active')->orderBy('subcategory_name_in','ASC')->get();
        return view('admin.file.create',compact('subcategories'));
    }

    public function submit(Request $request){
        $validation = Validator::make($request->all(), [
            'subcategory_id'      => 'required',
            'filename'            => 'required',
            'filename_en'         => 'required',
            'fileupload'          => 'required|mimes:pdf,xlsx,xls|max:35000',
            'imageupload'         => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'status'              => 'required',
            'upload_date'         => 'required',
        ]);


        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/files/';

        $fileupload  = '';
        if ($request->hasFile('fileupload')) {
            $fileupload = uniqid().'.'.$request->fileupload->extension();
            $fileupload = $request->fileupload->move($path, $fileupload);
        }

        $imageupload  = '';
        if ($request->hasFile('imageupload')) {
            $imageupload = uniqid().'.'.$request->imageupload->extension();
            $imageupload = $request->imageupload->move($path, $imageupload);
        }

        $file = File::create([
            'subcategory_id' => $request->subcategory_id,
            'file_name'     => $request->filename,
            'file_name_en'  => $request->filename_en,
            'file_path'     => $fileupload,
            'image'         => $imageupload,
            'status'        => $request->status,
            'created_at'    => $request->upload_date,
        ]);

        // Update year field for file filter
        $file->file_year = $file->created_at->year;
        $file->save();

        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $subcategories = SubCategory::where('status','active')->orderBy('created_at','DESC')->get();
        $file = File::where('id',$request->id)->first();
        return view('admin.file.edit',compact('subcategories','file'));
    }

    public function update(Request $request){
        $validation = Validator::make($request->all(), [
            'subcategory_id'      => 'required',
            'filename'            => 'required',
            'filename_en'         => 'required',
            'fileupload'          => 'mimes:pdf,xlsx,xls|max:35000',
            'status'              => 'required',
            'imageupload'         => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'upload_date'         => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $file = File::where('id',$request->file_id)->first();
        $path = 'images/files/';

        if ($request->hasFile('fileupload')) {
            $fileupload = uniqid().'.'.$request->fileupload->extension();
            $fileupload = $request->fileupload->move($path, $fileupload);
            $file->file_path = $fileupload;
        }
        if ($request->hasFile('imageupload')) {
            $imageupload = uniqid().'.'.$request->imageupload->extension();
            $imageupload = $request->imageupload->move($path, $imageupload);
            $file->image = $imageupload;
        }

        $file->subcategory_id   = $request->subcategory_id;
        $file->file_name        = $request->filename;
        $file->file_name_en     = $request->filename_en;
        $file->status           = $request->status;
        $file->created_at       = $request->upload_date;
        $file->save();

        // Update year field for file filter
        $file->file_year        = $file->created_at->year;
        $file->save();

        return $this->successResponse();
    }

    public function view(Request $request){
        $category = Category::whereSlug($request->category)->firstOrFail();
        return view('frontend.pages.files.index',compact('category'));
    }
    public function delete(Request $request){
        $file = File::find($request->id);
        $file->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
