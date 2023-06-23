<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaDonacion extends Model
{
    use HasFactory;
    protected $table = 'formasdonacion'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idformadonacion'; // Clave primaria de la tabla

    // Indicar si los campos de creación y actualización deben ser gestionados por Eloquent
    public $timestamps = false;

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'tipo'
    ];
}
