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
}

