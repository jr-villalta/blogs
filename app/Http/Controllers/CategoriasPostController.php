<?php

namespace App\Http\Controllers;
use App\Models\Categoriaspost;
use Illuminate\Http\Request;

class CategoriasPostController extends Controller
{
    // Método para mostrar todos las categoriasposts
    public function index()
    {
        $categoriaspost = Categoriaspost::all();
        return response()->json($categoriaspost);
    }
}