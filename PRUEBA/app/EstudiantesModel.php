<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudiantesModel extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['nombre','apellido','correo','password'];
}
