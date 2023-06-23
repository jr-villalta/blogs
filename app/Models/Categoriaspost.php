<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriaspost extends Model
{
    use HasFactory;
    protected $table = 'categoriasposts'; // Nombre de la tabla en la base de datos
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"
    
    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idpost', 'idcategoria'
    ];

    // Relación con el modelo post
    public function post()
    {
        return $this->belongsTo(Post::class, 'idpost');
    }

    // Relación con el modelo categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idcategoria');
    }
}