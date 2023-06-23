<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    protected $table = 'niveles'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idnivel'; // Clave primaria de la tabla

    // Indicar si los campos de creación y actualización deben ser gestionados por Eloquent
    public $timestamps = false;

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idnivel', 'crear', 'editar', 'modificar', 'bloquearmoderadores', 'eliminarcomentarios', 'bloquearusuarios', 'leer', 'comentar', 'donar', 'rol'
    ];
    use HasFactory;
}
