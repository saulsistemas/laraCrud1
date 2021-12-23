<?php

use App\Http\Controllers\CategoriaController;
use App\Models\categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Route::get('/', function () {
#    return view('welcome');
#});
#
Route::get('categorias',[CategoriaController::class, 'index'])->name('categorias.index');
Route::get('categorias/create',[CategoriaController::class, 'create'])->name('categorias.create');
Route::post('categorias',[CategoriaController::class, 'store'])->name('categorias.store');
Route::get('categorias/{id}',[CategoriaController::class, 'show'])->name('categorias.show');
Route::get('categorias/{id}/edit',[CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('categorias/{id}',[CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('categorias/{id}',[CategoriaController::class, 'destroy'])->name('categorias.destroy');

#Route::resource('categorias',CategoriaController::class)->names('categorias');

