<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'genero'; 
    protected $primaryKey = 'gen_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable =[
        'gen_nombre',
    ];
}

