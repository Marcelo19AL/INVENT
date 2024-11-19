@extends('layout.plantilla')

@section('contenido')
<div class="d-none d-lg-block" style="height: 80px;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Editar Artículo</h3></div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="small mb-1" for="titulo">Título</label>
                                <input class="form-control py-4" style="color: black" id="titulo" name="titulo" type="text" value="{{ $post->titulo }}" required />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="autor">Autor</label>
                                <input class="form-control py-4" style="color: black" id="autor" name="autor" type="text" value="{{ $post->autor }}" required />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="contenido">Contenido</label>
                                <textarea class="form-control py-4" style="color: black" id="contenido" name="contenido" rows="6" required>{{ $post->contenido }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="detalle">Detalle</label>
                                <textarea class="form-control py-4" style="color: black" id="detalle" name="detalle" rows="8" required>{{ $post->detalle }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="fecha_publicacion">Fecha de Publicación</label>
                                <input class="form-control py-4" style="color: black" id="fecha_publicacion" name="fecha_publicacion" type="date" value="{{ $post->fecha_publicacion }}" required />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="imagen">Imagen</label>
                                <input class="form-control-file py-4" style="color: black" id="imagen" name="imagen" type="file" />
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary btn-block">Actualizar Artículo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block" style="height: 80px;"></div>
@endsection

