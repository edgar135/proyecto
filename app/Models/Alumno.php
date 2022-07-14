<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Alumno extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'alumno';
    protected $fillable=[
        'nombre',
        'edad',
        'genero',
        'carrera',
        'etnia_indigena',
        'horario',
        'calificacion_prepa',
        'becado',
        'problemas_de_salud',

    ];
    use HasFactory;
}
