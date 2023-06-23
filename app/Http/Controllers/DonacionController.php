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
}