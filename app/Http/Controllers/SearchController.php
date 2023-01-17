<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\File;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index(Request $request){
        $lang = app()->getLocale();

        $searchResults = (new Search())
            ->registerModel(Blog::class, 'title_en','title_in')
            ->registerModel(File::class, 'file_name')
            ->perform($request->input('query'));


        return view('frontend.pages.search', compact('searchResults'));
    }
}
