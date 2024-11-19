@extends('layout.plantilla')

@section('contenido')
    <div class="d-none d-lg-block" style="height: 100px;"></div>
    <div class="container">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div>
                <h4 class="titulo-grande px-3 mb-0">Líneas de Investigación</h4>
            </div>
            <p class=" texto1 mb-4">Explora las diversas líneas de investigación que ofrecemos en educación.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item rounded">
                    <div class="d-flex align-items-center">
                        <div class="icon pe-3"><img src="img/linea1.png" style="height: 60px" alt="Icono"></div>
                        <div class="service-content bg-light p-4 flex-grow-1">
                            <h5 class="linea mb-4">Pedagogía Global y Religiosa</h5>
                            <button class="btn btn-primary rounded-pill text-white py-2 px-4" data-bs-toggle="modal"
                                data-bs-target="#pedagogiaModal">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda línea de investigación -->
            <div class="col-md-10 col-lg-8 col-xl-6 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded">
                    <div class="d-flex align-items-center">
                        <div class="icon pe-3"><img src="img/linea2.png" style="height: 60px" alt="Icono"></div>
                        <div class="service-content bg-light p-4 flex-grow-1">
                            <h5 class="linea mb-4">Liderazgo y Gestión Educativa</h5>
                            <button class="btn btn-primary rounded-pill text-white py-2 px-4" data-bs-toggle="modal"
                                data-bs-target="#liderazgoModal">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercera línea de investigación -->
            <div class="col-md-10 col-lg-8 col-xl-6 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded">
                    <div class="d-flex align-items-center">
                        <div class="icon pe-3"><img src="img/linea3.png" style="height: 60px" alt="Icono"></div>
                        <div class="service-content bg-light p-4 flex-grow-1">
                            <h5 class="linea mb-4">Neurodidáctica y Dinámicas de Grupo</h5>
                            <button class="btn btn-primary rounded-pill text-white py-2 px-4" data-bs-toggle="modal"
                                data-bs-target="#neurodidacticaModal">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cuarta línea de investigación -->
            <div class="col-md-10 col-lg-8 col-xl-6 mb-4 d-flex justify-content-center wow fadeInUp" data-wow-delay="0.9s">
                <div class="service-item rounded">
                    <div class="d-flex align-items-center">
                        <div class="icon pe-3"><img src="img/linea4.png" style="height: 60px" alt="Icono"></div>
                        <div class="service-content bg-light p-4 flex-grow-1">
                            <h5 class="linea mb-4">Desarrollo Psicomotor y Proyectos Educativos</h5>
                            <button class="btn btn-primary rounded-pill text-white py-2 px-4" data-bs-toggle="modal"
                                data-bs-target="#psicomotorModal">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quinta línea de investigación -->
            <div class="col-md-10 col-lg-8 col-xl-6 mb-4 d-flex justify-content-center wow fadeInUp" data-wow-delay="0.9s">
                <div class="service-item rounded">
                    <div class="d-flex align-items-center">
                        <div class="icon pe-3"><img src="img/linea5.png" style="height: 60px" alt="Icono"></div>
                        <div class="service-content bg-light p-4 flex-grow-1">
                            <h5 class="linea mb-4">Neurociencia y Estrategias de Acompañamiento</h5>
                            <button class="btn btn-primary rounded-pill text-white py-2 px-4" data-bs-toggle="modal"
                                data-bs-target="#neurocienciaModal">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Pedagogía Global y Religiosa -->
    <div class="modal fade" id="pedagogiaModal" tabindex="-1" aria-labelledby="pedagogiaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo" id="pedagogiaModalLabel">Pedagogía Global y Religiosa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="subtitulo">Objetivo:</h6>
                            <p class="contenido">Explorar cómo la integración de principios éticos y valores religiosos en
                                la pedagogía puede
                                contribuir a la formación de ciudadanos globales comprometidos, dentro de un marco de
                                diversidad
                                cultural y respeto mutuo.</p>

                            <h6 class="subtitulo">Enfoques:</h6>
                            <p class="contenido">Investigar metodologías didácticas que incorporan contenidos religiosos de
                                manera efectiva en los
                                currículos escolares, analizando su impacto en el desarrollo moral y social de los
                                estudiantes.</p>

                            <h6 class="subtitulo">Aplicaciones Prácticas:</h6>
                            <p class="contenido">Desarrollar modelos de enseñanza que faciliten la inclusión de perspectivas
                                religiosas globales en el
                                aula, promoviendo el diálogo interreligioso y la comprensión multicultural.</p>

                            <h6 class="subtitulo">Diplomado Asociado:</h6>
                            <p class="contenido">Diplomado en Didáctica de las Ciencias Religiosas orientado al Pacto
                                Educativo Global</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/l1.png" class="img-fluid" alt="Imagen">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Liderazgo y Gestión Educativa -->
    <div class="modal fade" id="liderazgoModal" tabindex="-1" aria-labelledby="liderazgoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo" id="liderazgoModalLabel">Liderazgo y Gestión Educativa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="subtitulo">Objetivo:</h6>
                            <p class="contenido">Examinar las prácticas de liderazgo transformacional y gestión estratégica
                                en instituciones educativas y su influencia en la innovación y mejora continua.</p>

                            <h6 class="subtitulo">Enfoques:</h6>
                            <p class="contenido">Evaluar las competencias y habilidades de liderazgo necesarias para
                                directivos escolares en el contexto actual, identificando factores clave para el éxito en la
                                gestión de recursos y personal.</p>

                            <h6 class="subtitulo">Aplicaciones Prácticas:</h6>
                            <p class="contenido">Desarrollar programas de formación y capacitación para líderes educativos,
                                centrados en la gestión estratégica y la toma de decisiones basada en evidencia.</p>

                            <h6 class="subtitulo">Diplomado Asociado:</h6>
                            <p class="contenido">Diplomado en Dirección Ejecutiva y Gestión Estratégica Educativa</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/l2.png" class="img-fluid" alt="Imagen">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal para Neurodidáctica y Dinámicas de Grupo -->
    <div class="modal fade" id="neurodidacticaModal" tabindex="-1" aria-labelledby="neurodidacticaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo" id="neurodidacticaModalLabel">Neurodidáctica y Dinámicas de Grupo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="subtitulo">Objetivo:</h6>
                            <p class="contenido">Investigar cómo las estrategias basadas en neurodidáctica pueden optimizar
                                el
                                aprendizaje cooperativo
                                y mejorar el rendimiento de equipos de alto desempeño en contextos educativos.</p>

                            <h6 class="subtitulo">Enfoques:</h6>
                            <p class="contenido">Estudiar cómo las habilidades psicomotoras influyen en el proceso de
                                aprendizaje y
                                en la ejecución de
                                proyectos educativos complejos.</p>

                            <h6 class="subtitulo">Aplicaciones Prácticas:</h6>
                            <p class="contenido">Diseñar y validar actividades educativas que integren técnicas
                                neurodidácticas
                                para potenciar la
                                colaboración y el aprendizaje activo en el aula.</p>

                            <h6 class="subtitulo">Diplomado Asociado:</h6>
                            <p class="contenido">Diplomado en Neurodidáctica, Aprendizaje Cooperativo y Equipos de Alto
                                Rendimiento
                                en Educación</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/l3.png" class="img-fluid" alt="Imagen">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Desarrollo Psicomotor y Proyectos Educativos -->
    <div class="modal fade" id="psicomotorModal" tabindex="-1" aria-labelledby="psicomotorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo" id="psicomotorModalLabel">Desarrollo Psicomotor y Proyectos Educativos
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="subtitulo">Objetivo:</h6>
                            <p class="contenido">Explorar la interacción entre el desarrollo neuropsicomotor de los
                                estudiantes y
                                su capacidad para
                                participar eficazmente en proyectos de aprendizaje basado en proyectos.</p>

                            <h6 class="subtitulo">Enfoques:</h6>
                            <p class="contenido">Analizar cómo las técnicas y conocimientos neurocientíficos pueden ser
                                aplicados
                                para optimizar el
                                monitoreo y el acompañamiento en entornos educativos.</p>

                            <h6 class="subtitulo">Aplicaciones Prácticas:</h6>
                            <p class="contenido">Crear guías y recursos didácticos que incorporen ejercicios de desarrollo
                                psicomotor para mejorar la
                                planificación, ejecución y evaluación de proyectos en el aula.</p>

                            <h6 class="subtitulo">Diplomado Asociado:</h6>
                            <p class="contenido">Diplomado en Neuropsicomotricidad y Didáctica del Aprendizaje Basado en
                                Proyectos
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/l4.png" class="img-fluid" alt="Imagen">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Neurociencia y Estrategias de Acompañamiento -->
    <div class="modal fade" id="neurocienciaModal" tabindex="-1" aria-labelledby="neurocienciaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo" id="neurocienciaModalLabel">Neurociencia y Estrategias de Acompañamiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="subtitulo">Objetivo:</h6>
                            <p class="contenido">Identificar y desarrollar estrategias de acompañamiento pedagógico basadas en la neurociencia
                                que
                                mejoren los procesos de enseñanza y aprendizaje.</p>

                            <h6 class="subtitulo">Enfoques:</h6>
                            <p class="contenido">Analizar la aplicación de principios neurocientíficos en la enseñanza para fomentar un
                                aprendizaje
                                más eficaz y motivador.</p>

                            <h6 class="subtitulo">Aplicaciones Prácticas:</h6>
                            <p class="contenido">Implementar programas de formación para docentes y coordinadores pedagógicos que integren
                                conocimientos de neurociencia para un acompañamiento más efectivo y empático.</p>

                            <h6 class="subtitulo">Diplomado Asociado:</h6>
                            <p class="contenido">Diplomado en Monitoreo y Acompañamiento Pedagógico con Orientación en Neurociencia
                                Educacional</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/l5.png" class="img-fluid" alt="Imagen">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
