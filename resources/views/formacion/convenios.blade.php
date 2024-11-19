@extends('layout.plantilla')

@section('contenido')
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <!-- Sección de Convenios -->
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h2 class=" px-3 mb-0 conve1">Convenios Académicos y Estratégicos</h2>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Convenio 1 -->
                <div class="col-md-6 col-lg-4 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex align-items-center">
                        <div class="service-img rounded-start" style="width: 200px;">
                            <img src="img/conve1.jpeg" class="img-fluid rounded-start" alt="Imagen Convenio 1">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4" style="width: calc(100% - 200px);">
                            <div class="service-content-inner">
                                <br>
                                <h5 class="mb-4 conve2">Universidad de las Américas y el Caribe</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Convenio 2 -->
                <div class="col-md-6 col-lg-4 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex align-items-center">
                        <div class="service-img rounded-start" style="width: 170px;">
                            <img src="img/conve2.png" class="img-fluid rounded-start" alt="Imagen Convenio 2">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4" style="width: calc(100% - 200px);">
                            <div class="service-content-inner">
                                <h5 class="mb-4 conve2">Centro Latinoamericano de Investigación e Innovación Científica</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <!-- Sección de Alianzas Estratégicas -->
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h4 class="px-3 mb-0 conve1">Alianzas Estratégicas</h4>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Alianza Estratégica 1 -->
                <div class="col-md-6 col-lg-4 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex align-items-center">
                        <div class="service-img rounded-start" style="width: 200px;">
                            <img src="img/cielo.png" class="img-fluid rounded-start" alt="Imagen Alianza Estratégica 1" style="width: 180px;">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4" style="width: calc(100% - 200px);">
                            <div class="service-content-inner">
                                <br>
                                <br style="height: 10%">
                                <h5 class="mb-4 conve2">Cielo Abierto</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alianza Estratégica 2 -->
                <div class="col-md-6 col-lg-4 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded d-flex align-items-center">
                        <div class="service-img rounded-start" style="width: 165px;">
                            <img src="img/imce.png" class="img-fluid rounded-start" alt="Imagen Alianza Estratégica 2" style="width: 165px;">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4" style="width: calc(100% - 200px);">
                            <div class="service-content-inner">
                                <br>
                                <h5 class="mb-4 conve2">Instituto Mente, Cerebro y Educación - ASEDH</h5>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

