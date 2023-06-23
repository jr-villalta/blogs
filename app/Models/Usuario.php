<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'nickname'; // Clave primaria de la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'contrasenia', 'idnivel'
    ];

    // Relación con el modelo Nivel
    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'idnivel');
    }
    
}
