<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    use HasFactory;
    protected $table = 'donaciones'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'iddonacion'; // Nombre de la llave primaria en la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"
    
    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'nickname', 'idformapago', 'cantidad', 'fecha'
    ];

    // Relación con el modelo usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'nickname');
    }

    // Relación con el modelo formapago
    public function formapago()
    {
        return $this->belongsTo(FormaPagoDonacion::class, 'idformapago');
    }
}