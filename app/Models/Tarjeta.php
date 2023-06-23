<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = 'tarjeta'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idpago'; // Clave primaria de la tabla
    public $timestamps = false; // Indica que no se utilizarán los campos "created_at" y "updated_at"

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idPost', 'nickName', 'numeroTarjeta', 'voucher', 'emisor', 'cantidadDonacion', 'fechaDonacion'
    ];

    // Relación con el modelo FormaPagoDonacion
    public function formaPagoDonacion()
    {
        return $this->belongsTo(FormaPagoDonacion::class, 'idPago');
    }

    // Relación con el modelo Post
    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost');
    }

    // Relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'nickName');
    }
    use HasFactory;
}