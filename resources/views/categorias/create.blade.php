<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Codigo</label>
        <input type="text" name="codigo">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="nombre" name="nombre">
    </div>
    <div>
        
        <input type="submit" value="Guardar">
    </div>        
</form>