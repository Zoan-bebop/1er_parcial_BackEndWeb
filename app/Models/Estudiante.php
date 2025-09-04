<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    protected $fillable = [
        'nombres',
        'apellidos',
        'ci',
        'edad',
        'fecha_nacimiento',
        'estado',
        'email',
    ];
}
