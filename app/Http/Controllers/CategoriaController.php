<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index(Request $request)
    {
        $busqueda=trim($request->busqueda);
        $categorias = Categoria::where('nombre','LIKE','%'.$busqueda.'%')
                    ->latest('id')
                    ->paginate(2);
        $data=[
            'categorias'=>$categorias,
            'busqueda'=>$busqueda,
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
        $categoria = Categoria::find($id);
        $data = [
            'categoria'=>$categoria,
        ];
        return view('categorias.show',$data);
    }

 
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        $data = [
            'categoria'=>$categoria,
        ];
        return view('categorias.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->codigo = $request->codigo;
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect()->route('categorias.index');
    }


    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
