<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Blog extends Model implements Searchable
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [
        'id','category_id','title_en','title_in','thumbnail','image','description_en', 'description_in', 'slug','status','created_at','updated_at','meta_desc','keyword','meta_tag'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'title':
                $field = 'title_'.$locale;
                break;
            case 'description':
                $field = 'description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }

    public function getSearchResult(): SearchResult
    {
        $lang = app()->getLocale();
        if($lang == 'en'){
            $url = route('blog.show', $this->slug);
            return new SearchResult(
                $this,
                $this->title_en,
                $url
            );
        }else{
            $url = route('blog.show', $this->slug);
            return new SearchResult(
                $this,
                $this->title_in,
                $url
            );
        }



    }

}
