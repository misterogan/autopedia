<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subcategories = SubCategory::with('category')->orderBy('created_at','DESC')->get();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    public function add_view()
    {
        $categories = Category::where('status','active')->orderBy('created_at','DESC')->get();
        return view('admin.subcategory.create',compact('categories'));
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'category_id'           => 'required',
            'subcategory_en_name'      => 'required',
            'subcategory_in_name'      => 'required',
            'status'                => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $subcategory = SubCategory::create([
            'category_id'           =>$request->category_id,
            'subcategory_name_en'   => $request->subcategory_en_name,
            'subcategory_name_in'   => $request->subcategory_in_name,
            'status'                => $request->status,
        ]);

        return $this->successResponse();
    }

    public function edit_view(Request $request)
    {
        $categories = Category::where('status','active')->orderBy('created_at','DESC')->get();
        $subcategory = SubCategory::where('id',$request->id)->first();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
    }

    public function update(Request $request)
    {

        $user = Auth::user();

        $validation = Validator::make($request->all(), [
            'category_id'           => 'required',
            'subcategory_en_name'      => 'required',
            'subcategory_in_name'      => 'required',
            'status'                => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $subcategory = SubCategory::where('id',$request->subcategory_id)->first();

        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name_en = $request->subcategory_en_name;
        $subcategory->subcategory_name_in = $request->subcategory_in_name;
        $subcategory->status = $request->status;
        $subcategory->save();

        return $this->successResponse();
    }
    public function delete(Request $request){
        $files = File::where('subcategory_id',$request->id)->first();
        if(!$files){
            $subcategory = SubCategory::find($request->id);
            $subcategory->delete();
            return redirect()->back()->with('success', 'deleted success');
        }else{
            return redirect()->back()->with('failed', 'Cannot delete, item still under use');
        }


    }


}
