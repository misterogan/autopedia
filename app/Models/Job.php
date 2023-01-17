<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $fillable = [
        'id','name','location','job_type', 'description_en', 'description_in','status','slug','created_at','updated_at'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }

    public function getTranslated($attr)
    {
        $locale = app()->getLocale() == 'id' ? 'in' : 'en' ;

        switch ($attr) {
            case 'description':
                $field = 'description_'.$locale;
                break;
            default:
                return NULL;
          }

        return $this->$field;
    }
}
