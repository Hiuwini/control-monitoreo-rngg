<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoProject extends Model
{
    //
    protected $table = "permisos_projects";
    protected $fillable = ['project_id','user_id'];

}
