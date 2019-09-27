<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //protected $table = "productos";

    protected $fillable = [
        'componente', 'id_proyecto', 'id_categoria',
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
