<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    // Método para mostrar todos los usuarios
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    // insertar una nueva categoria
    public function insertarCategoria()
    {
        $categoria = new Categoria();
        $categoria->nombrecategoria = 'categoria laravel';
        $categoria->save();
        return response()->json(['message' => 'Categoria creado con éxito'], 201);
    }
}