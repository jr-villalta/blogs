<?php

namespace App\Http\Controllers;
use App\Models\tarjeta;
use Illuminate\Http\Request;

class TarjetaController extends Controller
{
    public function insertarTar()
    {
        
            $Tarjeta = new Tarjeta();
            $Tarjeta->idpago = 1;
            $Tarjeta->idpost = 1;
            $Tarjeta->nickname = 'ale';
            $Tarjeta->numerotarjeta ='1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa';
            $Tarjeta->voucher ='1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa';
            $Tarjeta->emisor = 'visa';
            $Tarjeta->cantidaddonacion = 60.00;
            $Tarjeta->fechadonacion = '2023/06/09';

        

        // Guardar el nuevo registro en la base de datos
        $Tarjeta->save();

        // Retornar una respuesta JSON
        return response()->json(['message' => 'donacion creado con éxito'], 201);
    }
    public function index()
    {
        $Tarjeta = Tarjeta::all();
        return response()->json($Tarjeta);
    }
}
