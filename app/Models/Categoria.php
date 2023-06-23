<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    protected $table = 'categorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idcategoria'; // Nombre de la llave primaria en la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"
    
    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'nombrecategoria'
    ];

}