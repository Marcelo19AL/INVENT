@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 80px;"></div>
    <h1>Agregar Recurso</h1>

    <form action="{{ route('recursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="3"></textarea>
        <br>
        <label for="categoria_id">Categoría:</label>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label for="archivo">Archivo:</label>
        <input type="file" name="archivo" id="archivo">
        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection

