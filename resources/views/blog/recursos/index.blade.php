@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 100px;"></div>
    <div class="container">
        <h1 class="mb-4 conve2">Recursos</h1>
        <p class="lead mb-4 sec3" style="text-align: center">
            En esta sección, encontrarás una variedad de recursos disponibles para su descarga. Explora
            nuestra colección para acceder a contenido valioso y útil.
        </p>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ route('recursos.index') }}" method="GET">
                    <div class="form-group">
                        <label for="categoria" class="contenido">Filtrar por línea de Investigación:</label>
                        <select class="form-control" id="categoria" name="categoria" onchange="this.form.submit()"
                            style="background-color: #0a55a3; color: white;">
                            <option value="">Todas las líneas de Investigación</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}"
                                    {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <div class="table-responsive mt-4">
                    <table class="unique-table">
                        <thead class="unique-table-header">
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">PDF</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-recursos">
                            @foreach ($recursos as $recurso)
                                <tr>
                                    <td>{{ $recurso->titulo }}</td>
                                    <td>{{ $recurso->descripcion }}</td>
                                    <td>
                                        <a href="{{ asset('storage/recursos/' . $recurso->archivo) }}" target="_blank"
                                            class="unique-download-btn">Descargar PDF</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-end">
                <img src="{{ asset('img/recu.png') }}" alt="Imagen" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
