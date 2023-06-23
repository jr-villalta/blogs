<?php

namespace App\Http\Controllers;
use App\Models\niveles;
use Illuminate\Http\Request;

class NivelesController extends Controller
{
    public function index()
    {
        $niveles = Niveles::all();
        return response()->json($niveles);
    }
}
