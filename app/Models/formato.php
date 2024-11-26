<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formato extends Model
{
    protected $table = 'formato'; 
    protected $primaryKey = 'for_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable =[
        'for_nombre',
    ];
}
