<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Business;
use App\Models\Blog;
use App\Models\Job;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Http;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\File;
use App\Models\About;
use App\Models\Milestone;
use App\Models\Management;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home()
    {
        $banners = Banner::sequence()->active()->get();
        $businesses = Business::sequence()->active()->get();
        $blogs = Blog::latest()->take(3)->active()->get();

        return view('frontend.pages.home', compact('banners','businesses','blogs'));
    }

    public function product(Request $request)
    {
        $business = $request->slug ? Business::whereSlug($request->slug)->first() : NULL;
        $businesses = Business::sequence()->active()->get();
        return $business ? view('frontend.pages.produk.detail',compact('business')) : view('frontend.pages.produk.index',compact('businesses'));
    }

    public function blog_index(Request $request)
    {
        $current_category = $request->category ? BlogCategory::whereSlug($request->category)->first() : NULL;
        $categories = BlogCategory::latest()->active()->paginate();
        $blogs = $current_category ? $current_category->blogs()->active()->latest()->paginate(6) : Blog::active()->latest()->paginate(6);
        return view('frontend.pages.blog.index',compact('categories','blogs','current_category'));
    }

    public function blog_show(Request $request)
    {
        $blog = Blog::whereSlug($request->blog)->firstOrFail();
        $related_blogs = Blog::active()->latest()->take(3)->get();
        return view('frontend.pages.blog.show',compact('blog','related_blogs'));
    }

    public function career(Request $request)
    {
        $job = $request->slug ? Job::whereSlug($request->slug)->first() : NULL;
        $jobs = Job::latest()->active()->paginate(6);
        $businesses = Job::active()->distinct('location')->pluck('location');
        $jobs_count = Job::active()->count();
        return $job ? view('frontend.pages.karir.show',compact('job')) : view('frontend.pages.karir.index',compact('jobs','businesses','jobs_count'));
    }

    public function get_data_saham(Request $request)
    {
        $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/ASLC.JK?region=US&lang=en-US&includePrePost=false&interval=1d&useYfid=true&range=14d&corsDomain=finance.yahoo.com&.tsrc=finance');
        return $response->json();
    }

    public function transparansi(Request $request)
    {

        $category = Category::whereSlug($request->category)->first();

        $sub_category = SubCategory::where('category_id',$category->id)->where('status','active')->first();
        $files_sub = File::where('subcategory_id',$sub_category->id)->latest()->paginate(7);
        $files = File::where('status','active')->paginate(7);
        $files = $files->unique('file_year');
        $segment_2 = request()->segment(2);

        return view('frontend.pages.files.index',compact('category','files','files_sub','segment_2'));
    }

    public function transparansi_subcategory(Request $request){

        $category = Category::whereSlug($request->category)->firstOrFail();
        $files_sub = File::where('subcategory_id',$request->sub_category)->latest()->get();
        $files_sub = $files_sub->unique('id');
        $files = File::where('status','active')->get();
        $files = $files->unique('file_year');
        $segment_2 = request()->segment(2);
        return view('frontend.pages.files.index',compact('files','files_sub','category','segment_2'));
    }


    public function about(Request $request)
    {
        $about = About::firstOrFail();
        $management = Management::active()->get();
        $direksi = Management::where('division', 'direksi')->sequence()->active()->get();
        $komisaris = Management::where('division', 'komisaris')->sequence()->active()->get();
        // $milestone = Milestone::sequence()->active()->get();
        $milestone = Milestone::orderBy('id','DESC')->active()->get();
        // dd($direksi);
        return view('frontend.pages.company.index',compact('about','management','direksi','komisaris', 'milestone'));
    }

    public function transparansi_get_file(Request $request){

        $category = Category::whereSlug($request->url_segment)->first();
        $subcategories = SubCategory::where('category_id',$category->id)->get();
        $data = '';
        $no = 1;

        foreach ($subcategories as $subcategory) {
            $files = File::where('subcategory_id', $subcategory->id)->get();

            if($no == 1){
                $cache = $subcategory->id;
            }
            $data = '';
            if($cache == $subcategory->id){
                foreach ($files as $file) {
                    $data .= '<div class="box-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="200">
                        <div class="box-content">
                            <div class="box-icon">
                                <img src="'.asset('assets/images/svg/icon-pdf.svg').'" class="img-fluid icon" alt="icon">
                            </div>
                            <div class="box-text">
                                <div class="title">
                                  '.$file->getTranslated('file_name').'
                                </div>
                                <div class="date">
                                    '.$file->created_at->format('d F Y').'
                                </div>
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="'.asset($file->file_path).'" class="btn btn-download fw-bold" target="_blank">
                                '.__("Selengkapnya").'
                            </a>
                        </div>
                    </div>';
                }
            }
            $no++;
            return response()->json(['result' =>$data]);
        }
    }

    public function choosing(Request $request)
    {
            $files = File::where('subcategory_id', $request->id_sub)->get();
            $data = '';
                foreach ($files as $file) {
                    $data .= '<div class="box-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="200">
                        <div class="box-content">
                            <div class="box-icon">
                                <img src="'.asset('assets/images/svg/icon-pdf.svg').'" class="img-fluid icon" alt="icon">
                            </div>
                            <div class="box-text">
                                <div class="title">
                                  '.$file->getTranslated('file_name').'
                                </div>
                                <div class="date">
                                    '.$file->created_at->format('d F Y').'
                                </div>
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="'.asset($file->file_path).'" class="btn btn-download fw-bold" target="_blank">
                                '.__("Selengkapnya").'
                            </a>
                        </div>
                    </div>';
                }

            return response()->json(['result' =>$data]);

    }

    public function filter(Request $request){

            if($request->url_segment !=  ''){
                $request->url_segment = $request->url_segment;
            }
            else{
                $category = Category::whereSlug($request->segment_url_cat)->first();
                $subcategories = SubCategory::where('category_id',$category->id)->first();
                $request->url_segment = $subcategories->id;

            }
            $note = '';
            if($request->filter1 == '' && $request->filter2 == '' && $request->filter3 == '' ){
                $query = File::where('subcategory_id',$request->url_segment);
            }

            if($request->filter1 != ''){
                if($request->filter1 == 'order'){
                    $query = File::where('subcategory_id',$request->url_segment)->orderBy('file_name');
                }elseif ($request->filter1 == 'newest'){
                    $query = File::where('subcategory_id',$request->url_segment)->orderBy('created_at','DESC');
                }elseif ($request->filter1 == 'oldest'){
                    $query = File::where('subcategory_id',$request->url_segment)->orderBy('created_at','ASC');
                }
                $note = 'filter 1';
            }
            if($request->filter2 != ''){
                $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2);
                $note = 'filter 2';

            }
            if($request->filter3 != ''){
                $query = File::where('subcategory_id',$request->url_segment)->whereMonth('created_at', $request->filter3);
                $note = 'filter 3';
            }

            if($request->filter1 != ''&& $request->filter2 != '' && $request->filter3 != ''){
                if($request->filter1 == 'order'){
                    $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('file_name');
                }elseif ($request->filter1 == 'newest'){
                    $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('created_at','DESC');
                }elseif ($request->filter1 == 'oldest'){
                    $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('created_at','ASC');
                }
                $note = 'filter 1,2,3';

            }
            else if($request->filter1 != '' && $request->filter2 != ''){
                if($request->filter1 == 'order'){
                    $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->orderBy('file_name');
                }elseif ($request->filter1 == 'newest'){
                    $query =File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->orderBy('created_at','DESC');
                }elseif ($request->filter1 == 'oldest'){
                    $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->orderBy('created_at','ASC');
                }
                $note = 'filter 1,2';

            }

            else if($request->filter1 != ''  && $request->filter3 != ''){
                if($request->filter1 == 'order'){
                    $query = File::where('subcategory_id',$request->url_segment)->whereMonth('created_at', $request->filter3)->orderBy('file_name');
                }elseif ($request->filter1 == 'newest'){
                    $query = File::where('subcategory_id',$request->url_segment)->whereMonth('created_at', $request->filter3)->orderBy('created_at','DESC');
                }elseif ($request->filter1 == 'oldest'){
                    $query = File::where('subcategory_id',$request->url_segment)->whereMonth('created_at', $request->filter3)->orderBy('created_at','ASC');
                }
                $note = 'filter 1,3';
            }

            else if($request->filter2 != ''  && $request->filter3 != ''){
                $query = File::where('subcategory_id',$request->url_segment)->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3);
                $note = 'filter 2,3';

            }
            $data = '';
            foreach ($query->get() as $file){
            if( $request->segment_url_cat == 'laporan-tahunan'){
                $image =  '<img src="'.asset($file->image).'" class="img-fluid icon" alt="icon">';
            }else{
                $image = '<img src="'.asset('assets/images/svg/icon-pdf.svg').'" class="img-fluid icon" alt="icon">';
            }
                $data .= '<div class="box-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="200">
                <div class="box-content">
                    <div class="box-icon">
                       '.$image.'
                    </div>
                    <div class="box-text">
                        <div class="title">
                          '.$file->getTranslated('file_name').'
                        </div>
                        <div class="date">
                            '.$file->created_at->format('d F Y').'
                        </div>
                    </div>
                </div>
                <div class="box-button">
                    <a href="'.asset($file->file_path).'" class="btn btn-download fw-bold" target="_blank">
                        '.__("Selengkapnya").'
                    </a>
                </div>
            </div>';
            }

            return response()->json(['result' => $data]);



    }

    public function filter_bug(Request $request){

        $subcategory = $request->session()->get('id_sub_cache');

        $query = File::where('subcategory_id',$subcategory);
        $note = '';

        if($request->filter1 != ''){
            if($request->filter1 == 'order'){
                $query = $query->orderBy('file_name');
            }elseif ($request->filter1 == 'newest'){
                $query = $query->orderBy('created_at','DESC');
            }elseif ($request->filter1 == 'oldest'){
                $query = $query->orderBy('created_at','ASC');
            }
            $note = $subcategory.'filter 1';
        }
         if($request->filter2 != ''){
            $query = $query->where('file_year', $request->filter2);
            $note = $subcategory.'filter 2';
         }
         if($request->filter3 != ''){
            $query = $query->whereMonth('created_at', $request->filter3);
            $note = $subcategory.'filter 3';
        }

         if($request->filter1 != '' && $request->filter2 != ''  && $request->filter3 != ''){
            if($request->filter1 == 'order'){
                $query = $query->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('file_name');
            }elseif ($request->filter1 == 'newest'){
                $query = $query->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('created_at','DESC');
            }elseif ($request->filter1 == 'oldest'){
                $query = $query->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3)->orderBy('created_at','ASC');
            }
            $note = $subcategory.'filter 1 & 2 & 3';
        }
       else if($request->filter1 != '' && $request->filter2 != ''){
            if($request->filter1 == 'order'){
                $query = $query->where('file_year', $request->filter2)->orderBy('file_name');
            }elseif ($request->filter1 == 'newest'){
                $query =$query->where('file_year', $request->filter2)->orderBy('created_at','DESC');
            }elseif ($request->filter1 == 'oldest'){
                $query = $query->where('file_year', $request->filter2)->orderBy('created_at','ASC');
            }
            $note = $subcategory.'filter 1 & 2';
        }

        else if($request->filter1 != ''  && $request->filter3 != ''){
            if($request->filter1 == 'order'){
                $query = $query->whereMonth('created_at', $request->filter3)->orderBy('file_name');
            }elseif ($request->filter1 == 'newest'){
                $query = $query->whereMonth('created_at', $request->filter3)->orderBy('created_at','DESC');
            }elseif ($request->filter1 == 'oldest'){
                $query = $query->whereMonth('created_at', $request->filter3)->orderBy('created_at','ASC');
            }
            $note = $subcategory.'filter 1 & 3';
        }

        else if($request->filter2 != ''  && $request->filter3 != ''){
            $query = $query->where('file_year', $request->filter2)->whereMonth('created_at', $request->filter3);
            $note = $subcategory.'filter 2 & 3';
        }


        $data_filter = '';

        foreach ($query->get() as $file){
            $data_filter .= '<div class="box-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="200">
                <div class="box-content">
                    <div class="box-icon">
                        <img src="'.asset('assets/images/svg/icon-pdf.svg').'" class="img-fluid icon" alt="icon">
                    </div>
                    <div class="box-text">
                        <div class="title">
                          '.$file->getTranslated('file_name').'
                        </div>
                        <div class="date">
                            '.$file->created_at->format('d F Y').'
                        </div>
                    </div>
                </div>
                <div class="box-button">
                    <a href="'.asset($file->file_path).'" class="btn btn-download fw-bold" target="_blank">
                        '.__("Selengkapnya").'
                    </a>
                </div>
            </div>';
        }


        return response()->json(['result' =>$data_filter]);

    }

    public function test(){
        $category = Category::whereSlug('perdagangan-UpczdcrVRX6aA24Y')->first();
        $subcategories = SubCategory::where('category_id',$category->id)->get();
        $no = 1;
        foreach ($subcategories as $subcategory) {
            $files = File::where('subcategory_id', $subcategory->id)->get();
            $data = '';
            if($no == 1){
                $cache = $subcategory->id;
            }
            if($cache == $subcategory->id){
                foreach ($files as $file) {
                    echo $file->file_name."<br/>";
                }
            }
        $no++;
        }
    }


}
