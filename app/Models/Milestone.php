<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $table = 'milestones';
    protected $fillable = [
        'id','name','description_en', 'description_in','image','status','created_at','updated_at'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
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
