<?php

namespace App\Http\Controllers;
use App\Models\subcategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function insertarsubCategoria()
    {
      
        // Crear una nueva instancia del modelo Comentario
        $Subcategoria = new Subcategoria();
        $Subcategoria->idcategoria  = 1;
        $Subcategoria->nombresubcategoria  = 'postres';
        //$Subcategoria->nickname =1;
       


        // Guardar el comentario en la base de datos
        $Subcategoria->save();

        // Retornar una respuesta JSON con el comentario insertado
        return response()->json([
            'message' => 'subcategoria insertado correctamente',
            'Subcategoria' => $Subcategoria,
        ]);
    }
    public function index()
    {
        $Subcategoria = Subcategoria::all();
        return response()->json($Subcategoria);
    }
}