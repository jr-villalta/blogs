<?php

namespace App\Http\Controllers;
use App\Models\bitcoin;
use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    public function insertarBit(Request $request)
    {
               

        // Crear una nueva instancia del modelo Bitcoin con los datos recibidos
        
            $bitcoin = new Bitcoin();
            $bitcoin->idpago = 1;
            $bitcoin->idpost = 1;
            $bitcoin->nickname = 'jmvf';
            $bitcoin->direccionbitcoin ='1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa';
            $bitcoin->cantidaddonacion = 0.5;
            $bitcoin->fechadonacion = '2023/06/09';
        

        // Guardar el nuevo registro en la base de datos
        $bitcoin->save();

        // Retornar una respuesta JSON
        return response()->json(['message' => 'donacion creado con éxito'], 201);
    }
    public function index(){
        $bitcoin = Bitcoin::all();
        return response()->json($bitcoin);
    }
}
