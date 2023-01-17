<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessFeatures extends Model
{
    protected $table = 'business_features';
    protected $fillable = [
        'business_id','features_title','features_title_in','features_description_en','features_description_in','features_status','features_image','created_at','updated_at'
    ];

    public function scopeActive($query)
    {
        $query->where('features_status', 'active');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'features_title':
                return $locale == 'en' ? $this->features_title : $this->features_title_in;
                break;
            case 'features_description':
                $field = 'features_description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }
}
