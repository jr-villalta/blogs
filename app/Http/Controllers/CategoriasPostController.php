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

    // insertar una nueva categoriaspost
    public function insertarCategoriaspost()
    {
        $categoriaspost = new Categoriaspost();
        $categoriaspost->idcategoria = 2;
        $categoriaspost->idpost = 2;
        $categoriaspost->save();
        return response()->json(['message' => 'Categoriaspost creado con éxito'], 201);
    }
}