@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 80px;"></div>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center mb-4 font-weight-bold programa1">Artículos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Artículo más reciente -->
                    @if ($posts->isNotEmpty())
                        @foreach ($posts as $latestPost)
                            <div class="card mb-4 border-0 shadow">
                                <div class="d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="{{ route('posts.show', $latestPost->id) }}">
                                            <h3 class="card-title programa4">{{ $latestPost->titulo }}</h3>
                                        </a>
                                        <h3 class="card-title texto3">{{ $latestPost->autor }}</h3>
                                        <p class="card-text texto1">{{ $latestPost->contenido }}</p>
                                    </div>
                                </div>
                                <div
                                    class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                                    <small class="text-muted texto2">{{ $latestPost->fecha_publicacion }}</small>
                                    <a href="{{ route('posts.show', $latestPost->id) }}" class="btn btn-primary rounded-pill text-white py-2 px-4">Conoce más</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="col-lg-4">
                    <aside class="aside bg-primary text-light p-4 rounded">
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

                        @foreach ($posts as $post)
                            <div class="card mb-3 border-0">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('images/' . $post->imagen) }}" alt="{{ $post->titulo }}"
                                            class="img-fluid rounded-start" style="max-width: 100%;">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title texto3">{{ $post->titulo }}</h5>
                                            <h5 class="card-title texto3">{{ $post->autor }}</h5>
                                            <p class="card-text"><small
                                                    class="text-muted texto3">{{ $post->fecha_publicacion }}</small></p>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Leer
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
@endsection
