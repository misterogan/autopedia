<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whistle extends Model
{
    protected $table = 'csr';
    protected $fillable = [
        'id','action','reporters_name','reporters_phone','reporters_address','reporters_email','reported_name','reported_position',
        'incident_date','incident_place','description','nominal','file','created_at','updated_at'
    ];

}
