<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class socio extends Model
{
    protected $table = 'socio'; 
    protected $primaryKey = 'soc_id';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable =[
        'soc_cedula',
        'soc_nombre',
        'soc_direccion',
        'soc_telefono',
        'soc_correo',
    ];
}

