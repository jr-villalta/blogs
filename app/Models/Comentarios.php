<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table = 'comentarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idcomentario'; // Clave primaria de la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idpost', 'nickname', 'comentario', 'fechahoracomentario'
    ];

    // Relación con el modelo Post
    public function post()
    {
        return $this->belongsTo(Post::class, 'idpost');
    }

    // Relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'nickname');
    }
}
