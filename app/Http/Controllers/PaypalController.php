<?php

namespace App\Http\Controllers;
use App\Models\paypal;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    
    public function insertarPay()
    {
        
            $paypal = new Paypal();
            $paypal->idpago = 1;
            $paypal->idpost = 1;
            $paypal->nickname = 'jmvf';
            $paypal->numerotransaccion ='1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa';
            $paypal->cantidaddonacion = 60.00;
            $paypal->fechadonacion = '2023/06/09';
            $paypal->correo = 'jrvillalta@gmail.com';
            $paypal->telefono = '79692507';
        

        // Guardar el nuevo registro en la base de datos
        $paypal->save();

        // Retornar una respuesta JSON
        return response()->json(['message' => 'donacion creado con éxito'], 201);
    }
    public function index()
    {
        $paypal = Paypal::all();
        return response()->json($paypal);
    }
}
