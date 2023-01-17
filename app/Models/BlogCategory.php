<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = [
        'id','category_en','category_in','status','created_at','updated_at', 'slug'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'category':
                $field = 'category_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }
}
