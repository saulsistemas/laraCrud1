@extends('template.plantilla')
@section('contenido') 
<div class="d-md-flex justify-content-md-end">
    <form action="{{ route('categorias.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="busqueda" class="form-control">
            <input type="submit" value="enviar" class="btn btn-primary">
        </div>
    </form>
    
</div>
<hr>
<a href="{{ route('categorias.create') }}" class=" btn btn-primary ">Crear</a>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Creado</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->codigo}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->created_at}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('categorias.show', $categoria->id) }}" class=" btn btn-primary ">+</a>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class=" btn btn-warning ">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria->id) }}"  method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Eliminar" class=" btn btn-danger ">
                        </form>
                    </div>    
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            {{-- <td colspan="5">{{$categorias->links()}}</td> --}}
            <td colspan="5">{{ $categorias->appends(['busqueda' => $busqueda])->links() }}</td>
            {{-- {!! $categorias->appends(["texto" => $texto]) !!} --}}
        </tr>
    </tfoot>
</table>
@endsection   