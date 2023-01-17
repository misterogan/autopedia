<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = BlogCategory::orderBy('created_at','DESC')->get();
        return view('admin.blogcategory.index',compact('categories'));
    }

    public function add_view()
    {
        return view('admin.blogcategory.create');
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'category_en_name'         => 'required',
            'category_in_name'         => 'required',
            'status'                   => 'required',
            'slug'                     => 'required|unique:blog_categories,slug',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $category = BlogCategory::create([
            'category_en'=> $request->category_en_name,
            'category_in'=> $request->category_in_name,
            'status'=> $request->status,
            'slug'=>$request->slug
        ]);

        return $this->successResponse();
    }

    public function edit_view(Request $request)
    {
        $category = BlogCategory::where('id',$request->id)->first();
        return view('admin.blogcategory.edit',compact('category'));
    }

    public function update(Request $request)
    {
        $category = BlogCategory::where('id',$request->category_id)->first();

        $validation = Validator::make($request->all(), [
            'category_en_name'      => 'required',
            'category_in_name'      => 'required',
            'status'                => 'required',
            'slug'                  => 'required|unique:blog_categories,slug,'.$category->id,
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $category->category_en = $request->category_en_name;
        $category->category_in = $request->category_in_name;
        $category->status = $request->status;
        $category->slug = $request->slug;
        $category->save();

        return $this->successResponse();
    }
    public function delete(Request $request){
        $blog = Blog::where('category_id',$request->id)->first();
        if(!$blog){
            $blog_category = BlogCategory::find($request->id);
            $blog_category->delete();
            return redirect()->back()->with('success', 'Deleted success');
        }else{
            return redirect()->back()->with('failed', 'Cannot delete, item still under use');
        }

    }
}
