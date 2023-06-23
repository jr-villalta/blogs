<?php

namespace App\Http\Controllers;
use App\Models\FormaDonacion;
use Illuminate\Http\Request;

class FormaDonacionController extends Controller
{
    public function index()
    {
        $formaPagoDonacion = FormaDonacion::all();
        return response()->json($formaPagoDonacion);
    }
}
