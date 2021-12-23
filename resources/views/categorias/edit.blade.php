<form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Codigo</label>
        <input type="text" name="codigo" value="{{$categoria->codigo}}">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="nombre" name="nombre" value="{{$categoria->nombre}}">
    </div>
    <div>
        
        <input type="submit" value="Guardar">
    </div>        
</form>