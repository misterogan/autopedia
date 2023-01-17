<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id','category_en','category_in','status','created_at','updated_at','slug','sequence','menu','icon'
    ];

    public function scopeActive($query)
    {
        $query->where('status', 'active');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('created_at', 'DESC');
    }

    public function scopeSequence($query)
    {
        $query->orderBy('sequence', 'ASC');
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

    public function scopeOfMenu($query, $menu)
    {
        $query->where('menu', $menu);
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

    public function getMenuLink()
    {
        switch ($this->menu) {
            case 'hubungan-investor':
                return 'Investor';
                break;
            case 'tata-kelola-perusahaan':
                return 'Tata Kelola';
                break;
            case 'info-perusahaan':
                return 'Info Perusahaan';
                break;
            default:
                return NULL;
          }
    }

}
