<?php

namespace App\Http\Controllers;
use App\Models\Donacion;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $donacion->fecha = '2023/07/09 12:00:00';
        $donacion->save();
        return response()->json(['message' => 'Donacion creado con éxito'], 201);
    }

    // Método para mostrar todas las donaciones
    public function pieDePagina()
    {
        $mesActual = Carbon::now()->month;

        $donaciones = Donacion::whereMonth('fecha', $mesActual)->get();

        $totalDonaciones = $donaciones->count();

        $mensaje = ($totalDonaciones < 3) ? 'Ayudanos para seguir creando más contenido gratuito!' : '';

        return response()->json([
            'totalDonaciones' => $totalDonaciones,
            'mensaje' => $mensaje,
            'donaciones' => $donaciones
        ]);
    }
}