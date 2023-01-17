<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'businesses';
    protected $fillable = [
        'id',
        'title',
        'product_image',
        'thumbnail_image',
        'banner_image',
        'banner_image_mobile',
        'description_en',
        'description_in',
        'short_description_en',
        'short_description_in',
        'slug',
        'status',
        'created_at',
        'updated_at',
        'sequence',
        'features_title_in',
        'features_title_en',
        'features_description_en',
        'features_description_in',
        'logo',
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }

    public function features()
    {
        return $this->hasMany(BusinessFeatures::class, 'business_id');
    }

    public function testimonials()
    {
        return $this->hasMany(Feedback::class, 'business_id');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'description':
                $field = 'description_'.$locale;
                break;
            case 'short_description':
                $field = 'short_description_'.$locale;
                break;
            case 'features_title':
                $field = 'features_title_'.$locale;
                break;
            case 'features_description':
                $field = 'features_description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }

    public function scopeSequence($query)
    {
        $query->orderBy('sequence', 'ASC');
    }

}
