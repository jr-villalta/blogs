<?php

namespace App\Http\Controllers;
use App\Models\comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    
    public function insertarComentario()
    {

        // Crear una nueva instancia del modelo Comentario
        $comentario = new Comentarios();
        $comentario->idpost = 1;
        //$comentario->nickname ='Ale';
        $comentario->nickname = 'jmvf';
        $comentario->comentario = 'wow';
        $comentario->fechahoracomentario = '2023/06/09 12:00:00';
        


        // Guardar el comentario en la base de datos
        $comentario->save();

        // Retornar una respuesta JSON con el comentario insertado
        return response()->json([
            'message' => 'Comentario insertado correctamente',
            'comentario' => $comentario,
        ]);
    }
    public function index()
    {
        $comentario = Comentarios::all();
        return response()->json($comentario);
    }
}
