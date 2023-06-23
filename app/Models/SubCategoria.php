<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'subcategorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idsubcategoria'; // Clave primaria de la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idsubcategoria', 'nombresubcategoria'
    ];

    use HasFactory;
}
