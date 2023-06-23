<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoriaspost extends Model
{
    use HasFactory;
    protected $table = 'subcategoriasposts'; // Nombre de la tabla en la base de datos
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"
    
    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idpost', 'idsubcategoria'
    ];

    // Relación con el modelo post
    public function post()
    {
        return $this->belongsTo(Post::class, 'idpost');
    }

    // Relación con el modelo subcategoria
    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class, 'idsubcategoria');
    }
}