<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    protected $table = 'director'; 
    protected $primaryKey = 'dir_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable =[
        'dir_nombre',
    ];
}

