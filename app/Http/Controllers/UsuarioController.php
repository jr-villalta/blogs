<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Método para mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    // Método para banear
    public function banearUsuario()
    {
        $usuario = Usuario::where('nickname', 'jmvf')->first();

        if ($usuario) {
            $usuario->delete();
            return response()->json(['message' => 'Baneado creado con éxito']);
        } else {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    }
}
