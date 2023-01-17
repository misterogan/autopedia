<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class File extends Model implements Searchable
{
    protected $table = 'files';
    protected $fillable = [
        'id','subcategory_id','file_name','file_path','status','created_at','updated_at','file_year','image','sequence','file_name_en'
    ];

    public function subcategory(){
        return $this->hasOne(SubCategory::class,'id','subcategory_id');
    }

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }
    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->file_name,
            $this->file_path
        );
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'file_name':
                return $locale == 'en' ? $this->file_name_en : $this->file_name;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }
    
}
