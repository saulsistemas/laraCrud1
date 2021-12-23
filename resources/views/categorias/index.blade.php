<a href="{{ route('categorias.create') }}">Crear</a>
<div>
    <form action="{{ route('categorias.index') }}" method="GET">
        <input type="text" name="busqueda">
        <input type="submit" value="enviar">
    </form>
    
</div>
<table border="1">
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
                    <a href="{{ route('categorias.show', $categoria->id) }}">+</a>
                    <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar">
                    </form>
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