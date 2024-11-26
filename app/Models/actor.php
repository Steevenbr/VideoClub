<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actor';

    protected $primaryKey = 'act_id';

    public $incrementing = true; 

    protected $fillable= [
        'act_nombre',
        'sex_id',
    ];

    public function sexo()
    {
        return $this->belongsTo(Sexo::class,'sex_id','sex_id');
    }
}
