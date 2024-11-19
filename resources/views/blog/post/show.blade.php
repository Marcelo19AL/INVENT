@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 80px;"></div>
    <div class="container-fluid blog py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-6">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <h1 class="display-5 conve1">{{ $post->titulo }}</h1>
                    <p class="lead texto1">{{ $post->contenido }}</p>
                    <h1 class="display-4 programa4">{{ $post->autor }}</h1>
                    <p class="text-end text-muted texto1">Fecha de Publicación: {{ $post->fecha_publicacion }}</p>
                    <p class="lead texto1" style="text-align: justify">{{ $post->detalle }}</p>
                    <a href="{{ asset('storage/post/' . $post->archivo) }}" target="_blank"
                        class="unique-download-btn">Descargar PDF</a>
                </div>



                <div class="col-lg-4">
                    <aside class="aside bg-secondary text-light p-4 rounded">
                        <h4 class="sidebar-title mb-4 texto4">Buscar Artículos</h4>
                        <!-- Formulario de búsqueda -->
                        <form action="{{ route('posts.search') }}" method="GET" class="search-form">
                            <input type="text" name="titulo" style="color: black" class="form-control mb-3"
                                placeholder="Buscar por título...">
                            <input type="text" name="autor" style="color: black" class="form-control mb-3"
                                placeholder="Buscar por autor...">
                            <input type="date" name="fecha_publicacion" class="form-control mb-3" style="color: black"
                                placeholder="Buscar por fecha...">
                            <button type="submit" class="btn btn-light btn-block">Buscar</button>
                        </form>
                        <br>
                        @foreach ($recentPosts as $recentPost)
                            <div class="card mb-3 border-0">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/' . $recentPost->imagen) }}"
                                            alt="{{ $recentPost->titulo }}" class="img-fluid rounded-start">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title titulo">{{ $recentPost->titulo }}</h5>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $recentPost->fecha_publicacion }}</small></p>
                                            <a href="{{ route('posts.show', $recentPost->id) }}" class="conve2">Leer
                                                más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/pdfjs/pdf.js') }}"></script>
    <script>
        var $pdfUrl = asset('storage/post/'.$post - > archivo);

        // Cargar PDF usando PDF.js
        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdfDoc) {
            pdfDoc.getPage(1).then(function(page) {
                var scale = 1.5;
                var viewport = page.getViewport({
                    scale: scale
                });

                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                var renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };

                page.render(renderContext).promise.then(function() {
                    document.getElementById('pdf-container').appendChild(canvas);
                });
            });
        });
    </script>
@endsection
