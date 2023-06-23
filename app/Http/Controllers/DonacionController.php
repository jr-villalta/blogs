<?php

namespace App\Http\Controllers;
use App\Models\Donacion;
use Illuminate\Http\Request;

class DonacionController extends Controller
{
    // Método para mostrar todos las donaciones
    public function index()
    {
        $donaciones = Donacion::all();
        return response()->json($donaciones);
    }

    // insertar una nueva donacion
    public function insertarDonacion()
    {
        $donacion = new Donacion();
        $donacion->nickname = 'jmvf';
        $donacion->idformadonacion = 1;
        $donacion->cantidad = 5;
        $donacion->fecha = '2023/06/09 12:00:00';
        $donacion->save();
        return response()->json(['message' => 'Donacion creado con éxito'], 201);
    }
}