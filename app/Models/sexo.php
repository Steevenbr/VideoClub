<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
    protected $table = 'sexo'; 
    protected $primaryKey = 'sex_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable =[
        'sex_nombre',
    ];
}

