<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function insertarpost()
    {
        
        // Crear una nueva instancia del modelo Comentario
        $posts = new Posts();
        $posts->nickname = 'usuario4';
        $posts->encabezado= 'wow';
        $posts->cuerpo= 'prueba';
        $posts->imagen= 'imga.jpg';
        $posts->fechapost= '2023/06/10 12:00:00';

        // Guardar el comentario en la base de datos
        $posts->save();

        // Retornar una respuesta JSON con el comentario insertado
        return response()->json([
            'message' => 'posts insertado correctamente',
            'posts' => $posts,
        ]);
    }
    
    public function index()
    {
        $posts = Posts::all();
        return response()->json($posts);
    }
}
