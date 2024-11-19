@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 80px;"></div>
    <div class="d-none d-lg-block" style="height: 80px;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header texto1">{{ $recursos->titulo }}</div>

                    <div class="card-body texto1">
                        <p>{{ $recursos->descripcion }}</p>
                        <div id="pdf-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/pdfjs/pdf.js') }}"></script>
    <script>
        var $pdfUrl = asset('storage/recursos/'.$recursos - > archivo);

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
