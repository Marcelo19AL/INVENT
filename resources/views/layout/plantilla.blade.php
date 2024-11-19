<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Invent Formación e Investigación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('img/fla.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-f/ievLUXWxzj+W+gApB8N2HvUSXjnjVzSG0Wi5v9hLJ2MY4Ji1cw0tviOgd0qMRdGkZiYyF0PQpb7kRcB4dR/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 48px; height: 48px;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 prueba">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0 prueba">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <img src="{{ asset('img/navbar.png') }}" alt="Logo" style="max-height: 5.625rem;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse prueba" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0 prueba">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quiénes Somos</a>
                        <div class="dropdown-menu m-0 prueba">
                            <a href="{{ route('identidad') }}" class="dropdown-item prueba">Nuestra Identidad</a>
                            <a href="{{ route('equipo') }}" class="dropdown-item prueba">Equipo Invent</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formación</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('programa') }}" class="dropdown-item prueba">Programa Formativo
                                Internacional</a>
                            <a href="{{ route('convenios') }}" class="dropdown-item prueba">Convenios</a>
                            <a href="{{ route('referentes') }}" class="dropdown-item prueba">Referentes Académicos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown prueba">
                        <a href="#" class="nav-link dropdown-toggle prueba"
                            data-bs-toggle="dropdown">Investigación</a>
                        <div class="dropdown-menu m-0 prueba">
                            <a href="{{route('publicaciones')}}" class="dropdown-item prueba">Publicaciones</a>
                            <a href="{{ route('lineas') }}" class="dropdown-item prueba">Líneas de Investigación</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown prueba">
                        <a href="#" class="nav-link dropdown-toggle prueba" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0 prueba">
                            <a href="{{ route('posts.index') }}" class="dropdown-item prueba">Artículos</a>
                            <a href="{{ route('recursos.index') }}" class="dropdown-item prueba">Recursos</a>
                        </div>
                    </li>
                    <li class="nav-item prueba">
                        <a href="{{ route('contacto') }}" class="nav-link prueba">Redes Sociales</a>
                    </li>
                    <li class="nav-item prueba">
                        <a href="https://www.inventsoluciones.com.pe/aulavirtual" target="_blank" class="nav-link prueba">Formación virtual</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    @yield('contenido')


    {{-- <!-- Footer Start -->
    <div class="d-none d-md-block">
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white prueba">Quiénes somos</h4>
                            <a href="{{ route('identidad') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i> Nuestra
                                Identidad</a><br>
                            <a href="{{ route('equipo') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i> Equipo Invent</a><br>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white prueba">Formación</h4>
                            <a href="{{ route('programa') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i> Programa
                                Formativo</a><br>
                            <a href="{{ route('convenios') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i>
                                Convenios</a><br>
                            <a href="{{ route('referentes') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i> Referentes
                                Académicos</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white prueba">Investigación</h4>
                            <a href="{{ route('publicaciones') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i>Publicaciones</a><br>
                            <a href="" style="color: white"><i class="fas fa-angle-right me-2"></i>Líneas de
                                Investigación</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white prueba">Blog</h4>
                            <a href="{{ route('articulos') }}" style="color: white"><i
                                    class="fas fa-angle-right me-2"></i>
                                Artículos</a><br>
                            <a href="" style="color: white" class="sec2"><i class="fas fa-angle-right me-2"></i>
                                Recursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}





    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4 bs-secondary">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-8 text-center text-md-start mb-md-0" style="align-content: center">
                    <span class="text-white prueba"><a href="#" style="color: white"><i
                                class="fas fa-copyright text-light me-2"></i>Invent
                            Formación e Investigación</a>, Todos los derechos reservados</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-R6ktpE4rJXObhHT7NkU3IoTFP1llvcqpm7e4+eFjtXyeTKnV6s7hwVwK3A7z1rBwITeGL6MuePkaRg6YlNNcjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
