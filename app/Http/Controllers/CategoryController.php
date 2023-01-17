<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Utils;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function add_view()
    {
        return view('admin.category.create');
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'category_en_name'      => 'required',
            'category_in_name'      => 'required',
            'status'                => 'required',
            'menu'                  => 'required',
            'icon'                  => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'sequence'              => 'required'
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/category/';
        $icon = NULL;

        if ($request->hasFile('icon')) {
            $icon = uniqid().'.'.$request->icon->extension();
            $icon = $request->icon->move($path, $icon);
        }

        $category = Category::create([
            'category_en'=> $request->category_en_name,
            'category_in'=> $request->category_in_name,
            'status'=> $request->status,
            'slug'=> Utils::slugify($request->category_en_name),
            'sequence'=> $request->sequence,
            'menu'=> $request->menu,
            'icon'=> $icon,
        ]);

        return $this->successResponse();
    }

    public function edit_view(Request $request)
    {
        $category = Category::where('id',$request->id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request)
    {
        $category = Category::where('id',$request->category_id)->first();

        $validation = Validator::make($request->all(), [
            'category_en_name'      => 'required',
            'category_in_name'      => 'required',
            'status'                => 'required',
            'slug'                  => 'required|unique:categories,slug,'.$category->id,
            'menu'                  => 'required',
            'sequence'              => 'required'
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/category/';

        if ($request->hasFile('icon')) {
            $icon = uniqid().'.'.$request->icon->extension();
            $icon = $request->icon->move($path, $icon);
            $category->icon = $icon;
        }

        $category->category_en = $request->category_en_name;
        $category->category_in = $request->category_in_name;
        $category->status = $request->status;
        $category->sequence = $request->sequence;
        $category->menu = $request->menu;
        $category->slug = $request->slug;
        $category->save();

        return $this->successResponse();
    }

    public function delete(Request $request){
        $subcategory = SubCategory::where('category_id',$request->id)->first();
        if(!$subcategory){
            $category = Category::find($request->id);
            $category->delete();
            return redirect()->back()->with('success', 'deleted success');
        }else{
            return redirect()->back()->with('failed', 'Cannot delete, item still under use');
        }


    }
}
