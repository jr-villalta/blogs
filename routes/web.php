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

/*
// inserts
Route::get('/comentarioInsert', [ComentariosController::class, 'insertarComentario']);
Route::get('/bitcoinInsert', [BitcoinController::class, 'insertarBit']);
Route::get('/paypalInsert', [PaypalController::class, 'insertarPay']);
Route::get('/tarjetaInsert', [TarjetaController::class, 'insertarTar']);
Route::get('/postInsert', [PostsController::class, 'insertarposts']);
Route::get('/subcatInsert', [SubCategoriaController::class, 'insertarsubCategoria']);
Route::get('/postsubInsert', [PostSubcategoriaController::class, 'insertarsubCategoriapost']);
Route::get('/desbanear', [UsuariosBanController::class, 'eliminarUsuarioBan']);
Route::get('/banear', [UsuarioController::class, 'banearUsuario']);
Route::get('/categoriaInsert', [CategoriasController::class, 'insertarCategoria']);
*/