<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use App\Models\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    // Método para mostrar todas las donaciones
    public function pieDePagina()
    {
        $mesActual = Carbon::now()->month;

        $donaciones = Donacion::whereMonth('fecha', $mesActual)->get();

        $totalDonaciones = $donaciones->count();

        $mensaje = ($totalDonaciones < 3) ? '¡Ayúdanos a seguir creando más contenido gratuito!' : '';

        return [
            'totalDonaciones' => $totalDonaciones,
            'mensaje' => $mensaje,
            'donaciones' => $donaciones
        ];
    }

    public function listadoposts()
    {
        $posts = Posts::with('categorias', 'subcategorias')->get();

        foreach ($posts as $post) {
            $post->piedepagina = $this->pieDePagina();
        }

        return response()->json($posts);
    }
}
