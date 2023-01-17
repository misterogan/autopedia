<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::orderBy('created_at','DESC')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    public function add_view(Request $request){
        $categories = BlogCategory::where('status','active')->orderBy('created_at','DESC')->get();
        return view('admin.blog.create',compact('categories'));
    }
    public function submit(Request $request){
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'blog_category'           => 'required',
            'title_en'              => 'required',
            'title_in'              => 'required',
            'description_en'         => 'required',
            'description_in'         => 'required',
            'thumbnail'              => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'image_upload'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1000',
            'status'                => 'required',
            'upload_date'         => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/blog/';

        if ($request->hasFile('thumbnail')) {
            $thumbnail = uniqid().'.'.$request->thumbnail->extension();
            $thumbnail = $request->thumbnail->move($path, $thumbnail);
        }

        if ($request->hasFile('image_upload')) {
            $image_upload = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image_upload);
        }

        $blog = Blog::create([
            'title_en' => $request->title_en,
            'title_in' => $request->title_in,
            'description_en' => $request->description_en,
            'description_in' => $request->description_in,
            'thumbnail' => $thumbnail,
            'image' => $image,
            'status' => $request->status,
            'slug' => Utils::slugify($request->title_en),
            'category_id' => $request->blog_category,
            'created_at'    => $request->upload_date,
            'meta_desc'    => $request->meta_desc,
            'keyword'    => $request->keyword,
            'meta_tag'    => $request->meta_tag,
        ]);
        return $this->successResponse();
    }

    public function edit_view(Request $request){
        $categories = BlogCategory::where('status','active')->orderBy('created_at','DESC')->get();
        $blog = Blog::where('slug',$request->slug)->first();
        return view('admin.blog.edit',compact('blog','categories'));
    }

    public function update(Request $request){

        $blog = Blog::where('id',$request->blog_id)->first();

        $validation = Validator::make($request->all(), [
            'blog_category'         => 'required',
            'title_en'              => 'required',
            'title_in'              => 'required',
            'slug'                  => 'required|unique:blogs,slug,'.$blog->id,
            'description_en'        => 'required',
            'description_in'        => 'required',
            'status'                => 'required',
            'upload_date'           => 'required',
        ]);
        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/blog/';

        if ($request->hasFile('thumbnail')) {

            $thumbnail = uniqid().'.'.$request->thumbnail->extension();
            $thumbnail = $request->thumbnail->move($path, $thumbnail);
            $blog->thumbnail = $thumbnail;
        }

        if ($request->hasFile('image_upload')) {

            $image = uniqid().'.'.$request->image_upload->extension();
            $image = $request->image_upload->move($path, $image);
            $blog->image = $image;
        }

        $blog->title_en            = $request->title_en;
        $blog->title_in            = $request->title_in;
        $blog->description_en      = $request->description_en;
        $blog->description_in      = $request->description_in;
        $blog->status              = $request->status;
        $blog->slug                = $request->slug;
        $blog->category_id         = $request->blog_category;
        $blog->created_at          = $request->upload_date;
        $blog->meta_desc           = $request->meta_desc;
        $blog->meta_tag            = $request->meta_tag;
        $blog->keyword             = $request->keyword;
        $blog->save();

        return $this->successResponse();

    }

    public function delete(Request $request){
        $blog = Blog::find($request->id);
        $blog->delete();
        return redirect()->back()->with('success', 'deleted success');
    }
}
