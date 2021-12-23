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
        return 'create';
    }

  
    public function store(Request $request)
    {
        return 'show';
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
