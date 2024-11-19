@extends('layout.plantilla')

@section('contenido')
    <!-- Espacio solo en dispositivos de escritorio -->
    <div class="d-none d-lg-block" style="height: 80px;"></div>

    <section class="mission-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="text-center">
                        <h2 class="section-title display-4 fw-bold conve1">Nuestra Misión</h2>
                    </div>
                    <br>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <p class="lead sec2-justify texto1">
                                Somos un agente educativo que desarrolla programas formativos de alta calidad y que gestiona sinergia entre los actores educativos.
                            </p>
                        </div>
                        <div class="col-lg-5 text-center">
                            <img src="img/mision.png" class="img-fluid mx-auto d-block" alt="Imagen de la misión" style="width: 150px">
                        </div>
                    </div>
                </div>

                <!-- Sección de Visión -->
                <div class="col-lg-6 mb-5">
                    <div class="text-center">
                        <h2 class="section-title display-4 fw-bold conve1">Nuestra Visión</h2>
                    </div>
                    <br>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <p class="lead sec2-justify texto1">
                                Buscamos ser un referente educativo comprometidos con la responsabilidad social empresarial y universitaria.
                            </p>
                        </div>
                        <div class="col-lg-5 text-center">
                            <img src="img/vision.png" class="img-fluid mx-auto d-block" alt="Imagen de la visión" style="width: 150px">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Valores -->
            <div class="row mt-5">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title display-4 fw-bold conve1">Nuestros Valores</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item equipo3">Respeto: <span class="texto1">Valorar a los clientes y colaboradores, aceptando las diferencias,
                            tanto culturales como personales, para
                            convivir en armonía</span></li>
                        <li class="list-group-item equipo3">Compromiso: <span class="texto1">Cumplir con las responsabilidades y tareas asignadas, demos
                            trando dedicación y esfuerzo en el
                            aprendizaje.</span></li>
                        <li class="list-group-item equipo3">Responsabilidad: <span class="texto1">Ser consciente de
                            las consecuencias de tus acciones y decisiones, asumiendo las consecuencias correspondientes.</span></li>

                        <li class="list-group-item equipo3">Confianza: <span class="texto1">Creer en ti mismo y en tus
                            compañeros, fomentando un ambiente
                            de seguridad y apoyo mutuo.</span></li>
                        <li class="list-group-item equipo3">Trabajo en equipo: <span class="texto1">Colaborar con los
                            demás de forma efectiva para alcanzar
                            objetivos comunes, respetando las ideas
                            y habilidades de cada integrante.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/valores.png" class="img-fluid mx-auto d-block" alt="Imagen de los valores"
                        style="max-height: 250px;">
                </div>
            </div>
        </div>
    </section>
@endsection
