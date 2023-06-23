<?php

namespace App\Http\Controllers;
use App\Models\usuariosban;
use Illuminate\Http\Request;

class UsuariosBanController extends Controller
{
    
    public function index()
    {
        $UsuariosBan = UsuariosBan::all();
        return response()->json($UsuariosBan);
    }

    public function eliminarUsuarioBan()
    {
        $usuarioBan = UsuariosBan::where('nickname', 'jmvf')->first();

        if ($usuarioBan) {
            $usuarioBan->delete();
            return response()->json(['message' => 'Usuario desbaneado con éxito']);
        } else {
            return response()->json(['message' => 'Usuario ban no encontrado'], 404);
        }
    }

}
