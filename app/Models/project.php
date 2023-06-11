<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombreProyecto', 
        'fuenteFondos', 
        'montoPlanificado',
        'montoPatrocinado',
        'montoFondosPropios'
    ];
}
