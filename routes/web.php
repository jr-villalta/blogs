<?php

use App\Http\Controllers\NivelesController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SubCategoriaController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriasPostController;
use App\Http\Controllers\SubcategoriaspostController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\FormaDonacionController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\UsuariosBanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

// rutas
Route::get('/niveles', [NivelesController::class, 'index']);
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/subcategorias', [SubCategoriaController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/categoriasposts', [CategoriasPostController::class, 'index']);
Route::get('/subcategoriasposts', [SubcategoriaspostController::class, 'index']);
Route::get('/comentarios', [ComentariosController::class, 'index']);
Route::get('/logs', [LogsController::class, 'index']);
Route::get('/donaciones', [DonacionController::class, 'index']);
Route::get('/formasdonacion', [FormaDonacionController::class, 'index']);
Route::get('/usuariosbaneados', [UsuariosBanController::class, 'index']);

// inserts
Route::get('/usuarioinsert', [UsuarioController::class, 'insertarUsuario']);
Route::get('/categoriasinsert', [CategoriasController::class, 'insertarCategoria']);
Route::get('/subcategoriasinsert', [SubCategoriaController::class, 'insertarsubCategoria']);
Route::get('/postsinsert', [PostsController::class, 'insertarPost']);
Route::get('/categoriaspostsinsert', [CategoriasPostController::class, 'insertarCategoriaspost']);
Route::get('/subcategoriaspostsinsert', [SubcategoriaspostController::class, 'insertarSubcategoriaspost']);
Route::get('/comentariosinsert', [ComentariosController::class, 'insertarComentario']);
Route::get('/donacionesinsert', [DonacionController::class, 'insertarDonacion']);

// banear y desbanear
Route::get('/banearusuario', [UsuarioController::class, 'banearUsuario']);
Route::get('/desbanear', [UsuariosBanController::class, 'eliminarUsuarioBan']);

// consultas
Route::get('/listaposts', [PostsController::class, 'listadoposts']);
Route::get('/pie', [DonacionController::class, 'pieDePagina']);