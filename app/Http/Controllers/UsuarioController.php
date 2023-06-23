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

    // insertar un nuevo usuario
    public function insertarUsuario()
    {
        $usuario = new Usuario();
        $usuario->nickname = 'jmvf';
        $usuario->nombre = 'Juan';
        $usuario->apellido = 'Vargas';
        $usuario->correo = 'jmvf2@gmail.com';
        $usuario->contrasenia = '123456';
        $usuario->idnivel = 3;
        $usuario->save();
        return response()->json(['message' => 'Usuario creado con éxito'], 201);
    }
}
