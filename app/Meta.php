<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    //
    protected $fillable = ['nombre', 'fecha_limite', 'estado','id_producto'];
}
