<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = [
        'id','business_id','name','description_en', 'description_in','feedback_en','feedback_in','image','status','created_at','updated_at'
    ];

    public function business(){
        return $this->hasOne(Business::class,'id','business_id');
    }

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'feedback':
                $field = 'feedback_'.$locale;
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
