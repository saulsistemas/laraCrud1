<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index()
    {
        $categorias = Categoria::all();
        $data=[
            'categorias'=>$categorias,
        ];
        return view('categorias.index',$data);
    }

  
    public function create()
    {
        return view('categorias.create');
    }

  
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->codigo= $request->codigo;
        $categoria->nombre= $request->nombre;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

   
    public function show($id)
    {
        return 'show';
    }

 
    public function edit($id)
    {
        return 'edit';
    }


    public function update(Request $request, $id)
    {
        return 'update';
    }


    public function destroy($id)
    {
        return 'delete';
    }
}
