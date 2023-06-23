<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    protected $table = 'paypal'; // Nombre de la tabla en la base de datos
    //protected $primaryKey = null; // No hay clave primaria en esta tabla
    protected $primaryKey = 'idpago'; // Clave primaria de la tabla
    
    // Indicar si los campos de creación y actualización deben ser gestionados por Eloquent
    public $timestamps = false;

    // Definir los campos de la tabla que pueden ser llenados masivamente
    protected $fillable = [
        'idPago', 'idPost', 'nickName', 'numeroTransaccion', 'cantidadDonacion', 'fechaDonacion', 'correo', 'telefono'
    ];

   

    // Definir las relaciones con otras tablas
    public function formaPagoDonacion()
    {
        return $this->belongsTo(FormaPagoDonacion::class, 'idPago');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'nickName');
    }
    use HasFactory;
}
