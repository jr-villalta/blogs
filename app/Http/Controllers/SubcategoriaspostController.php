<?php

namespace App\Http\Controllers;
use App\Models\Subcategoriaspost;
use Illuminate\Http\Request;

class SubcategoriaspostController extends Controller
{
    // Método para mostrar todos las subcategoriasposts
    public function index()
    {
        $subcategoriaspost = Subcategoriaspost::all();
        return response()->json($subcategoriaspost);
    }

    // insertar una nueva subcategoriaspost
    public function insertarSubcategoriaspost()
    {
        $subcategoriaspost = new Subcategoriaspost();
        $subcategoriaspost->idsubcategoria = 2;
        $subcategoriaspost->idpost = 2;
        $subcategoriaspost->save();
        return response()->json(['message' => 'Subcategoriaspost creado con éxito'], 201);
    }
}

