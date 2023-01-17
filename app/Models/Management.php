<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'managements';
    protected $fillable = [
        'name','position_en','position_in','description_en', 'description_in','image','image_banner','image_mobile','division', 'slug','status','created_at','updated_at','sequence'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeSequence($query)
    {
        $query->orderBy('sequence', 'ASC');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'position':
                $field = 'position_'.$locale;
                break;
            case 'description':
                $field = 'description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }

}
