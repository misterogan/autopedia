<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = [
        'id','title_en','title_in','description_en', 'description_in','image','created_at','updated_at','short_description_en','short_description_in','youtube_video_id'
    ];

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
            case 'short_description':
                $field = 'short_description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }
}
