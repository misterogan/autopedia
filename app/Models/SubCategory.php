<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $fillable = [
        'id','category_id','subcategory_name_en','subcategory_name_in','status','created_at','updated_at'
    ];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'subcategory_id');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'subcategory_name':
                $field = 'subcategory_name_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }
}

