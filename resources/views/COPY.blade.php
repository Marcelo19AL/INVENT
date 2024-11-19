<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - INVENT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Meta Tags para SEO -->
    <meta name="description"
        content="Inscríbete en nuestros diplomados especializados y mejora tus habilidades profesionales con expertos en la industria.">
    <meta name="keywords"
        content="Diplomados, cursos profesionales, marketing digital, gestión de proyectos, desarrollo web">
    <meta name="author" content="INVENT Formación e Investigación">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5/5h8grN5I5z/j4fj1Vj5pWnH9h3/YLO61P3W5xM0DxV/t8Knf9C+tOEBgS8yw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/new.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-15px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        #floating-button {
            animation: bounce 1.5s infinite;
        }

        #side-announcement {
            /* Ancho y altura del anuncio lateral */
            width: 350px;
            height: auto;
            /* Ajuste automático según el contenido */
        }

        /* Animación para mostrar el anuncio lateral */
        .show {
            transform: translateX(0);
        }
    </style>
    <style>
        @keyframes appear {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-appear {
            animation: appear 1s forwards;
        }

        .fondo {
            background-image: url('img/Recurso5.png');
            background-size: cover;
            /* Asegura que la imagen cubra toda la sección */
            background-position: center;
            /* Centra la imagen */
            height: 250px;
            /* Ajusta la altura según necesites */

        }

        .fondo2 {
            background-image: url('img/Recurso96.png');
            background-size: cover;
            background-position: center;
            height: 300px;
        }
    </style>
    <style>
        .borde {
            border-color: #0a55a3;
        }

        .textoV {
            color: #0a55a3;
        }

        .animate-appear {
            animation: appear 1s forwards;
        }

        @keyframes appear {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <style>
        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .space-y-4>*+* {
            margin-top: 1rem;
        }

        #infoModal {
            display: none;
            /* Oculto por defecto */
        }

        #infoModal.show {
            display: flex;
            /* Mostrar como flex */
        }

        .modal-content img {
            width: 67%;
            /* Reducir el tamaño de la imagen al 90% del ancho del modal */
            height: auto;
            /* Mantener proporción de la imagen */
            display: block;
            margin: 50px auto;
            /* Centrar horizontalmente y añadir margen vertical */
            border-radius: 8px;
            /* Añadir bordes redondeados para un mejor efecto visual */
        }

        .close-button {
            position:absolute;
            top: 9px;
            right: 9px;
            background-color: red;
            color: white;
            padding: 4px 8px;
            border-radius: 40%;
            cursor: pointer;
            z-index: 10;
            transition: background-color 0.3s ease;
        }

        .close-button:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <div id="announcement-bar"
        class="fixed top-0 left-0 w-full primario text-white py-3 px-4 flex flex-col md:flex-row justify-between items-center shadow-md transition-transform transform -translate-y-full duration-700 ease-out z-50">
        <div class="flex flex-col md:flex-row items-center">
            <span class="text-base md:text-lg font-medium tracking-wide mb-1 md:mb-0">
                ¡Descubre lo que tenemos preparado para ti!
            </span>
            <span class="text-yellow-300 text-base md:text-lg font-medium ml-0 md:ml-4">

            </span>
        </div>

        <div class="mt-2 md:mt-0 flex space-x-3 justify-end"> <!-- Se agrega justify-end para alinear a la derecha -->
            <a href="https://wa.me/914011639" target="__blank"
                class="bg-white text-blue-600 py-1 px-3 rounded-md shadow-sm hover:bg-gray-100 transition duration-300 ease-in-out flex items-center text-sm md:text-base">
                <i class="fas fa-edit mr-1"></i> Inscríbete
            </a>
            <a href="#" id="infoLink"
                class="azul text-white py-1 px-3 rounded-md shadow-sm hover:bg-red-700 transition duration-300 ease-in-out flex items-center text-sm md:text-base">
                <i class="fas fa-info mr-1"></i> Más info
            </a>
            <button id="close-announcement"
                class="text-white focus:outline-none ml-4 p-1 rounded-full plomo hover:bg-red-700 transition duration-300 ease-in-out">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
    </div>

    <div id="side-announcement"
        class=" verde fixed left-0 top-1/2 transform -translate-y-1/2 azul text-white p-6 rounded-lg shadow-lg z-50 transition-transform duration-500 ease-in-out -translate-x-full">
        <div class="flex flex-col">
            <h3 class="text-xl font-bold mb-2 texto-blanco">¡No te pierdas nuestro 1er CEI congreso Educativo
                Internacional 🌟</h3>
            <p class="font-semibold text-lg text-center texto-blanco1">Fecha: <strong>30 de noviembre 2024</strong></p>
            <p class="font-semibold text-lg text-center texto-blanco1">Fecha: <strong>01 de diciembre 2024</strong></p>
            <div class="mt-4 flex flex-col space-y-2">

                <a href="https://wa.me/1234567890" target="__blank"
                    class="bg-white texto-azul py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition duration-300 ease-in-out text-center">
                    ¡Infórmate!
                </a>

                <button id="close-side-announcement"
                    class="azul text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-700 transition duration-300 ease-in-out">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="infoModal" class="fixed inset-0 bg-plomo bg-opacity-50 flex flex-col items-center justify-center hidden z-50">
        <div class="rounded-lg shadow-lg p-0 azul relative overflow-hidden w-7/12 h-4/6 max-w-4xl">
            <button id="closeModal" class="close-button absolute top-4 right-4 bg-gray-300 text-gray-700 p-2 rounded-full transition duration-300 hover:bg-red-400 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
            <!-- Imagen que ocupa casi todo el div -->
            <img src="img/congreso.png" alt="Landing Image" class="object-contain w-full h-full mx-auto my-auto">

        </div>
    </div>





    <div class="font-sans antialiased text-gray-900">

        <!-- Sección congreso -->
        <section id="congreso" class="py-16" style="background-image: url('img/Recurso5.png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
            <div class="max-w-2xl mx-auto px-2">
                <div class=" rounded-lg shadow-lg p-2 azul flex flex-col items-center">
                    <img src="img/congreso.png" alt="Congreso" class="mb-2 mx-auto"> <!-- Imagen centrada -->
                    <!-- Botón de acción -->
                    <div class="mt-6 flex justify-center flex-wrap gap-2">
                        <a href="https://wa.me/914011639" target="__blank"
                            class="bg-green-500 text-white py-1 px-3 sm:py-1 sm:px-3 lg:py-3 lg:px-5 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl text-xs sm:text-sm lg:text-base">
                            <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Sección bienvenidos -->
        <section id="bienvenidos" class="py-12" style="background-color: #115EA8">
            <div class="container mx-auto px-4 flex flex-wrap">
                <!-- Lado izquierdo: Imagen -->
                <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-6 md:mb-0">
                    <img src="img/equipo.png" alt="Equipo Invent" class="w-full md:w-auto">
                </div>
                <!-- Lado derecho: Texto -->
                <div class="w-full md:w-1/2 flex items-center">
                    <div
                        class="bg-white bg-opacity-90 rounded-lg p-6 border border-[#0a55a3] shadow-md transition-transform transform duration-500 hover:scale-105">
                        <h2 class="text-2xl font-bold texto-azul2 mb-2 animate-appear" style="text-align: center">
                            Bienvenidos a INVENT</h2>
                        <hr class="border-t-2 border-[#0a55a3] mb-4 animate-appear">
                        <p class="text-md texto-negro1 mb-4 animate-appear" style="animation-delay: 0.5s;">
                            ¡Estamos encantados de que seas parte del Primer CEI - Congreso Educativo Internacional en
                            Neurociencia Educacional, Mentoría Pedagógica y Salud Emocional en Tiempos de Inteligencia
                            Artificial!
                        </p>
                        <p class="text-md texto-negro1 mb-4 animate-appear" style="animation-delay: 1s;">
                            Desde Invent nuestro compromiso es brindarte programas de calidad y espacios de formación
                            impartidos por referentes en el campo de la educación a nivel nacional e internacional.
                        </p>
                        <p class="text-md texto-negro1 mb-4 animate-appear" style="animation-delay: 1.5s;">
                            ¡Te invitamos a explorar nuestras opciones y dar el siguiente paso en tu excelencia
                            educativa!
                        </p>
                        <p class="text-md texto-negro1 animate-appear" style="animation-delay: 2s;">
                            ¡Estamos aquí para formar parte de tu formación y desarrollo profesional!
                        </p>
                        <div class="mt-6 flex justify-center">
                            <a href="{{ route('home') }}"
                                class="bg-gradient-to-r verde texto-blanco text-white py-3 px-6 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl"
                                target="__blank">¡Explora
                                Ahora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Ejes Temáticos -->
        <section id="ejes-tematicos" class="blanco py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8"
                    style="font-family: 'Poppins'; color: #0a55a3; font-weight: bolder;">Ejes Temáticos</h2>

                <div class="flex flex-col lg:flex-row items-center justify-around">
                    <!-- Item 1 -->
                    <div
                        class="lg:w-1/4 p-4 mb-6 text-center border borde rounded-lg shadow-lg bg-white transition-transform transform duration-500 hover:scale-105">
                        <img src="img/EJE1.png" alt="Neurociencia Educacional" class="mb-4 mx-auto w-24 h-24">
                        <h3 class="text-xl font-semibold textoV">Neurociencia Educacional</h3>
                        <br>
                    </div>
                    <!-- Item 2 -->
                    <div
                        class="lg:w-1/4 p-4 mb-6 text-center border borde rounded-lg shadow-lg bg-white transition-transform transform duration-500 hover:scale-105">
                        <img src="img/EJE2.png" alt="Salud Emocional en el Ámbito Educativo"
                            class="mb-4 mx-auto w-24 h-24">
                        <h3 class="text-xl font-semibold textoV">Salud Emocional en el Ámbito Educativo</h3>
                    </div>
                    <!-- Item 3 -->
                    <div
                        class="lg:w-1/4 p-4 mb-6 text-center border borde rounded-lg shadow-lg bg-white transition-transform transform duration-500 hover:scale-105">
                        <img src="img/EJE3.png" alt="Liderazgo y Gestión del Aprendizaje"
                            class="mb-4 mx-auto w-24 h-24">
                        <h3 class="text-xl font-semibold textoV">Liderazgo y Gestión del Aprendizaje</h3>
                    </div>
                    <!-- Item 4 -->
                    <div
                        class="lg:w-1/4 p-4 mb-6 text-center border borde rounded-lg shadow-lg bg-white transition-transform transform duration-500 hover:scale-105">
                        <img src="img/EJE4.png" alt="Didáctica por Competencias e Inteligencia Artificial"
                            class="mb-4 mx-auto w-24 h-24">
                        <h3 class="text-xl font-semibold textoV">Didáctica por Competencias e Inteligencia Artificial
                        </h3>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="#conferencias"
                        class="bg-gradient-to-r azul text-white py-3 px-6 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl">¡Explora
                        Ahora!</a>
                    <a href="https://wa.me/914011639" target="__blank"
                        class="bg-green-500 text-white py-3 px-6 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl"><i
                            class="fab fa-whatsapp mr-2"></i>WhatsApp</a>
                </div>
            </div>
        </section>

        <!--Seccion de EduPod -->
        <section id="edupod" class=" py-16 verde"
            style="background-image: url('img/fondoE.png'); background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="textoEdu"><em>RUTA DEL CONGRESO</em></h1>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center justify-center space-x-4 mb-6"> <!-- Primera imagen en el centro -->
                        <img src="img/edu.png" alt="Logo Edupod" class="h-32 md:h-40 lg:h-48 w-auto">
                        <img src="img/L1.png" alt="Leonardo Infante" class="h-40 md:h-48 lg:h-56 w-auto">
                    </div>

                    <h3 class="text-xl font-semibold mb-4 textoL3 text-center">SESIONES ASINCRÓNICAS</h3>
                    <ul class="space-y-2">
                        <li class="textoL2"><strong class="textoL1">SESIÓN 1:</strong> Neurociencia educacional, retos
                            para el docente S. XXI</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 2:</strong> Dirigir la escuela con
                            inteligencia: El papel de la IA</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 3:</strong> Inteligencia y salud emocional
                            en la escuela</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 4:</strong> Docentes que inspiran, docentes
                            que transforman la escuela</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 5:</strong> Cerebro social: Empatía y
                            colaboración hacen una mejor escuela</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 6:</strong> Director/docente, líder mentor
                            para una escuela que aprende</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 7:</strong> Estrés docente, manejo de
                            situaciones en la escuela</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 8:</strong> Retos en la formación integral
                            desde las IA</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 9:</strong> Cerebro y didáctica: Aprender y
                            enseñar</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 10:</strong> Director, líder transformador
                            para una escuela innovadora</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 11:</strong> Coaching educativo y
                            empoderamiento docente</li>
                        <li class="textoL2"><strong class="textoL1">SESIÓN 12:</strong> Nueva formación docente:
                            Nuevos retos de aprendizaje desde la IA</li>
                    </ul>
                    <div class="mt-6">
                        <p class="texto-negro1 text-center mb-4" style="text-align: center">Lo puedes ver en:</p>
                        <div class="flex justify-center space-x-6 mb-6">
                            <a href="https://www.youtube.com/playlist?list=PLwYLavoKLu4EP4bfEg8RO-KKWF2m4mJX_"
                                class="text-[#00a1a1] hover:text-[#007d7d] text-3xl">
                                <i class="fab fa-spotify"></i>
                            </a>
                            <a href="#" class="text-[#00a1a1] hover:text-[#007d7d] text-3xl">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <!-- Botón de acción -->
                        <div class="mt-8 flex justify-center flex-wrap gap-4">
                            <a href="https://wa.me/914011639" target="__blank"
                                class="bg-green-500 text-white py-2 px-4 sm:py-3 sm:px-6 lg:py-4 lg:px-8 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl text-sm sm:text-base lg:text-lg">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Conferencias Transformadoras -->
        <section id="conferencias" class="azul py-12 flex flex-col items-center bg-cover bg-center">
            <div class="container mx-auto flex flex-col bg-opacity-90 backdrop-blur-sm items-center">
                <div style="display: flex; justify-content: center;" class="azul">
                    <img src="img/conferencias.png" alt="conferencias titulo" height="900px" width="900px">
                </div>
                <br>
                <div class="flex flex-col items-center justify-around flex-grow lg:pl-8 space-y-8 w-full px-16">
                    <!-- Cards Circulares en Formato 2x2 -->
                    <div class="grid grid-cols-2 gap-12 blanco w-full" style="border-radius: 16px">

                        <!-- Primera Conferencia -->
                        <div class="flex flex-col items-center">
                            <br>
                            <div class="bg-[#00a1a1] text-white p-2 px-4 rounded-full text-center mb-2">
                                <span class="text-lg textoL4">Neurociencia educacional y transformación en la
                                    escuela</span>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-40 h-40 bg-gray-300 rounded-full overflow-hidden shadow-md">
                                    <img src="img/per3.png" alt="Dra. Anna Lucía Campos"
                                        class="object-cover w-full h-full rounded-full">
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="bg-[#0a55a3] text-white p-2 px-4 rounded-full text-center">
                                        <span class="text-lg textoL4">Dra. Anna Lucía Campos</span>
                                    </div>
                                    <div class="flex flex-col mt-2" style="text-align: center">
                                        <span class="text-lg textoL2">Directora IMCE - Brasil</span>
                                        <span class="text-lg textoL2">Mentora en Neurociencias - LATAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda Conferencia -->
                        <div class="flex flex-col items-center">
                            <br>
                            <div class="bg-[#00a1a1] text-white p-2 px-4 rounded-full text-center mb-2">
                                <span class="text-lg textoL4">Didáctica por competencias e IA en la mejora del
                                    aprendizaje</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-40 h-40 bg-gray-300 rounded-full overflow-hidden shadow-md">
                                    <img src="img/per2.png" alt="Dr. Rodrigo Salazar Gamarra Ph.D"
                                        class="object-cover w-full h-full rounded-full">
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="bg-[#0a55a3] text-white p-2 px-4 rounded-full text-center">
                                        <span class="text-lg textoL4">Dr. Rodrigo Salazar Gamarra Ph.D</span>
                                    </div>
                                    <div class="flex flex-col mt-2" style="text-align: center">
                                        <span class="text-lg textoL2">UCSUR - Perú</span>
                                        <span class="text-lg textoL2">Mentor en Inteligencia artificial - LATAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tercera Conferencia -->
                        <div class="flex flex-col items-center">
                            <br>
                            <div class="bg-[#00a1a1] text-white p-2 px-4 rounded-full text-center mb-2">
                                <span class="text-lg textoL4"> Salud emocional para una escuela empoderada</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-40 h-40 bg-gray-300 rounded-full overflow-hidden shadow-md">
                                    <img src="img/per1.png" alt="Prof. Coach Verónica Ampudia"
                                        class="object-cover w-full h-full rounded-full">
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="bg-[#0a55a3] text-white p-2 px-4 rounded-full text-center">
                                        <span class="text-lg textoL4">Prof. Coach Verónica Ampudia</span>
                                    </div>
                                    <div class="flex flex-col mt-2" style="text-align: center">
                                        <span class="text-lg textoL2">Líder en Dinámica Coaching - Argentina</span>
                                        <span class="text-lg textoL2">Mentora Coach educativo- LATAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cuarta Conferencia -->
                        <div class="flex flex-col items-center">
                            <br>
                            <div class="bg-[#00a1a1] text-white p-2 px-4 rounded-full text-center mb-2">
                                <span class="text-lg textoL4">Didáctica por competencias e IA en la mejora del
                                    aprendizaje</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-40 h-40 bg-gray-300 rounded-full overflow-hidden shadow-md">
                                    <img src="img/per4.png" alt="Dr. Paul Neira Del Ben"
                                        class="object-cover w-full h-full rounded-full">
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="bg-[#0a55a3] text-white p-2 px-4 rounded-full text-center">
                                        <span class="text-lg textoL4">Dr. Paul Neira Del Ben</span>
                                    </div>
                                    <div class="flex flex-col mt-2" style="text-align:center">
                                        <span class="text-lg textoL2">Director de The Learning Factor - Perú</span>
                                        <span class="text-lg textoL2">Mentor en Gestión y Liderazgo - LATAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- Botón para Redirigir a la Sección de Mentores -->
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="#mentores"
                            class="bg-[#575756] text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:bg-[#007d7d] hover:scale-105">
                            ¡Conoce más!
                        </a>
                        <a href="https://wa.me/914011639" target="__blank"
                            class="bg-green-500 text-white py-3 px-6 rounded-full shadow-lg transition-transform transform duration-300 hover:scale-110 hover:shadow-xl">
                            <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Mentores -->
        <section id="mentores" class="bg-white py-12" style="background-color: white;" style="border: #0a55a3">
            <div class="container mx-auto px-4">
                <div style="display: flex; justify-content: center;">
                    <img src="img/mentores.png" alt="Mentores img" class="mb-8 r-img">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div class="azul p-6 rounded-lg shadow-lg flex flex-col items-center">
                        <img src="img/per3.png" alt="Dra. Anna Lucía Campos"
                            class="w-40 h-40 rounded-full mb-4 border-4 border-white shadow-md">
                        <div class="verde px-4 py-2 rounded-full mb-4">
                            <h3 class="text-xl texto-blanco">Dra. Anna Lucía Campos</h3>
                        </div>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Anna Lucia es educadora con experiencia en educación infantil, primaria
                            y superior. Especialista en neurociencia educacional y desarrollo cere
                            bral infantil. Máster en Neurociencia (USAL). Miembro del Consejo de
                            Asesores de IMBES – International Mind, Brain and Education Society de
                            los Estados Unidos.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Fundadora del Child Development LAB IDEA y del IMCE – Instituto Mente, Cerebro & Educación.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            En 2018, recibe el premio internacional en los Estados Unidos Exemplif
                            ying the Mission of the International Mind, Brain and Education Society
                            Award, primer premio en esta categoría para América Latina.
                            Durante 3 años consecutivos (2019-2021) considerada una las 20 perso
                            nas más influyentes en la educación peruana en los últimos 25 años
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="azul p-6 rounded-lg shadow-lg flex flex-col items-center">
                        <img src="img/per2.png" alt="Dr. Rodrigo Salazar Gamarra"
                            class="w-40 h-40 rounded-full mb-4 border-4 border-white shadow-md">
                        <div class="verde text-white px-4 py-2 rounded-full mb-4">
                            <h3 class="text-xl texto-blanco">Dr. Rodrigo Salazar Gamarra Ph.D</h3>
                        </div>
                        <p class="text-justify text-md space-y-4 textoL4">
                            El Dr. Rodrigo Salazar Gamarra Ph. D es Consultor de Innovación Tecnológica para la Salud
                            premiado por el MIT Technology Review como Innovador Humanitario 2018 para América Latina
                            por sus acciones como director e investigador del "Instituto Mais Identidade (+ID)" en São
                            Paulo,
                            Brasil.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Presidente del Capítulo Peruano "Más Identidad Perú" y es voluntario en el Laboratorio de
                            Transformación Digital de la Secretaría de Gobierno
                            Digital de la Presidencia de Consejo de Ministros (PCM) del Perú.
                            Es Ph.D. y MSc. de la Universidad Paulista (UNIP).
                            Docente Investigador de la Universidad Científica del Sur.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Ha recibido la categoría de Miembro Honorario 2020 del Colegio Mexicano de Prótesis
                            Maxilofacial y también Honor al Mérito por la Asamblea Legislativa del Estado de Paraná.
                            Docente en el posgrado de la Universidad Peruana Cayetano Heredia.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="azul p-6 rounded-lg shadow-lg flex flex-col items-center">
                        <img src="img/per1.png" alt="Prof. Coach Verónica Ampudia"
                            class="w-40 h-40 rounded-full mb-4 border-4 border-white shadow-md">
                        <div class="verde text-white px-4 py-2 rounded-full mb-4">
                            <h3 class="text-xl texto-blanco">Prof. Coach Verónica Ampudia</h3>
                        </div>

                        <p class="text-justify text-md space-y-4 textoL4">
                            Coaching ontológico profesional, personal y organizacional. Coaching Educativo en formación.
                            Operadora socio terapeuta en Adicciones. Profesora en ciencias económicas. Profesora de
                            filosofía y ciencias de la educación.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Centro de Desarrollo Humano: Postitulo en Coaching corporal
                            Asociación PSI: Especialización en Neuro Ciencias, salud mental y emociones.
                            Fidelización del talento en la era digital.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Certificación de MIndfulness, inteligencia emocional para líderes conscientes
                            Directora en CEM 94- Argentina
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="azul p-6 rounded-lg shadow-lg flex flex-col items-center">
                        <img src="img/per4.png" alt="Dr. Paul Neira Del Ben"
                            class="w-40 h-40 rounded-full mb-4 border-4 border-white shadow-md">
                        <div class="verde px-4 py-2 rounded-full mb-4">
                            <h3 class="text-xl texto-blanco">Dr. Paul Neira Del Ben</h3>
                        </div>
                        <p class="text-justify text-md space-y-4 textoL4">
                            El Dr. Rodrigo Salazar Gamarra Ph. D es Consultor de Innovación Tecno
                            lógica para la Salud premiado por el MIT Technology Review como Inno
                            vador Humanitario 2018 para América Latina por sus acciones como
                            director e investigador del "Instituto Mais Identidade (+ID)" en São Paulo,
                            Brasil.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Presidente del Capítulo Peruano "Más Identidad Perú" y es voluntario en
                            el Laboratorio de Transformación Digital de la Secretaría de Gobierno
                            Digital de la Presidencia de Consejo de Ministros (PCM) del Perú.
                            Es Ph.D. y MSc. de la Universidad Paulista (UNIP).
                            Docente Investigador de la Universidad Científica del Sur.
                        </p>
                        <br>
                        <p class="text-justify text-md space-y-4 textoL4">
                            Ha recibido la categoría de Miembro Honorario 2020 del Colegio Mexica
                            no de Prótesis Maxilofacial y también Honor al Mérito por la Asamblea
                            Legislativa del Estado de Paraná.
                            Docente en el posgrado de la Universidad Peruana Cayetano Heredia.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección programa -->
        <section id="programa" class="p-10 verde">
            <div class="container mx-auto">
                <!-- Content Section Centered -->
                <div class="flex justify-center">
                    <div class="flex flex-col space-y-8 max-w-5xl w-full blanco" style="border-radius: 20px;">
                        <br>
                        <div class="flex items-center justify-center space-x-4 mb-6">
                            <img src="img/programa.png" alt="programa titulo" class="h-32 md:h-40 lg:h-48 w-auto">
                            <img src="img/roxanaV.png" alt="Roxana Vera" class="h-40 md:h-48 lg:h-56 w-auto">
                        </div>
                        <!-- Secciones -->
                        <div class="space-y-6">
                            <!-- Primera Sección -->
                            <div
                                class="flex items-start border-teal-400 bg-white shadow-lg rounded-lg p-4 max-w-2xl mx-auto mb-4 transition duration-300 ease-in-out transform hover:shadow-xl hover:scale-105">
                                <div class="flex items-center justify-center w-24 h-24 mr-4">
                                    <span
                                        class="texto-blanco verde rounded-full px-4 py-2 text-sm font-bold whitespace-nowrap">8:30
                                        AM</span>
                                </div>
                                <div class="flex flex-col space-y-1 justify-center flex-grow">
                                    <span class="text-lg font-semibold textoL2">Apertura del Congreso</span>
                                    <div
                                        class="azul texto-blanco p-3 rounded-lg shadow-md transition duration-300 hover:bg-[#005f8d]">
                                        Conferencia Transformadora Neurociencia educativa y transformación en la escuela
                                    </div>
                                    <span class="text-sm textoL2">Moderación</span>
                                </div>
                            </div>

                            <!-- Segunda Sección -->
                            <div
                                class="flex items-start bg-white shadow-lg rounded-lg p-4 max-w-2xl mx-auto mb-4 transition duration-300 ease-in-out transform hover:shadow-xl hover:scale-105">
                                <div class="flex items-center justify-center w-24 h-24 mr-4">
                                    <span
                                        class="texto-blanco verde rounded-full px-4 py-2 text-sm font-bold whitespace-nowrap">11:00
                                        AM</span>
                                </div>
                                <div class="flex flex-col space-y-1 justify-center flex-grow">
                                    <span class="text-lg font-semibold textoL2">Descanso</span>
                                    <div
                                        class="texto-blanco azul p-3 rounded-lg shadow-md transition duration-300 hover:bg-[#005f8d]">
                                        Conferencia Transformadora Liderazgo y gestión del conocimiento para una escuela
                                        que aprende
                                    </div>
                                    <span class="text-sm textoL2">Moderación</span>
                                </div>
                            </div>

                            <!-- Tercera Sección -->
                            <div
                                class="flex items-start border-teal-400 bg-white shadow-lg rounded-lg p-4 max-w-2xl mx-auto mb-4 transition duration-300 ease-in-out transform hover:shadow-xl hover:scale-105">
                                <div class="flex items-center justify-center w-24"></div>
                                <div class="flex flex-col space-y-1 w-full justify-center">
                                    <div
                                        class="verde texto-blanco p-4 rounded-lg shadow-md text-center transition duration-300 hover:bg-[#006b3c]">
                                        Feria Socioeducativa
                                    </div>
                                </div>
                            </div>

                            <!-- Cuarta Sección -->
                            <div
                                class="flex items-start border-teal-400 bg-white shadow-lg rounded-lg p-4 max-w-2xl mx-auto transition duration-300 ease-in-out transform hover:shadow-xl hover:scale-105">
                                <div class="flex items-center justify-center w-24 h-24 mr-4">
                                    <span
                                        class="texto-blanco verde rounded-full px-4 py-2 text-sm font-bold whitespace-nowrap">4:00
                                        PM</span>
                                </div>
                                <div class="flex flex-col space-y-1 justify-center flex-grow">
                                    <div
                                        class="texto-blanco azul p-3 rounded-lg shadow-md transition duration-300 hover:bg-[#005f8d]">
                                        Conferencia Transformadora Didáctica por competencias e Inteligencia Artificial
                                        en la mejora del aprendizaje
                                    </div>
                                    <span class="text-sm textoL2">Moderación</span>
                                    <span class="text-sm textoL2">Descanso</span>
                                </div>
                            </div>

                            <!-- Quinta Sección -->
                            <div
                                class="flex items-start border-teal-400 bg-white shadow-lg rounded-lg p-4 max-w-2xl mx-auto transition duration-300 ease-in-out transform hover:shadow-xl hover:scale-105">
                                <div class="flex items-center justify-center w-24 h-24 mr-4">
                                    <span
                                        class="texto-blanco verde rounded-full px-4 py-2 text-sm font-bold whitespace-nowrap">6:30
                                        PM</span>
                                </div>
                                <div class="flex flex-col space-y-1 justify-center flex-grow">
                                    <div
                                        class="texto-blanco azul p-3 rounded-lg shadow-md transition duration-300 hover:bg-[#005f8d]">
                                        Conferencia Transformadora: Salud emocional para una escuela empoderada
                                    </div>
                                    <span class="text-sm textoL2">Moderación</span>
                                    <span class="text-sm textoL2">Cierre del Congreso</span>
                                </div>
                            </div>
                            <div class="mt-8 flex justify-center space-x-1">
                                <h1
                                    class="texto-negro py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:bg-[#007d7d] hover:scale-105">
                                    ¡Informate aquí!
                                </h1>
                                <a href="https://wa.me/914011639" target="__blank"
                                    class="bg-green-500 text-white py-3 px-6 rounded-full shadow-lg transition duration-300 transform hover:scale-110 hover:shadow-xl">
                                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección moderadores -->
        <section id="moderadores" class="relative py-16 azul flex"> <!-- Contenedor de imágenes y textos -->
            <div class="container mx-auto px-6 relative z-10 flex flex-col items-center">
                <h1 class="mb-6 textoMod">MODERADORES</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-20"> <!-- Primera Card -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="img/Recurso 14.png" alt="Moderador 1"class="w-full h-48 object-contain p-4">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 texto-verde">Mg. Medalit Cárdenas Cabezas</h3>
                            <p class="text-sm texto-negro">Directora de ODECCAS</p>
                        </div>
                    </div> <!-- Segunda Card -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="img/Recurso 12.png" alt="Moderador 2" class="w-full h-48 object-contain p-4">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 texto-verde">Mg. Willy Mantilla Correa</h3>
                            <p class="text-sm texto-negro">Presidente CCEC-LL</p>
                        </div>
                    </div> <!-- Tercera Card -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="img/Recurso 13.png" alt="Moderador 3" class="w-full h-48 object-contain p-4">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 texto-verde">Dra. Ena Obando</h3>
                            <p class="text-sm texto-negro">Vicerrectora de Investigación UCT</p>
                        </div>
                    </div> <!-- Cuarta Card -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="img/Recurso 11.png" alt="Moderador 4" class="w-full h-48 object-contain p-4 ">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 texto-verde">Dr. Robert Contreras Morales</h3>
                            <p class="text-sm texto-negro">Director GP-LL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Logo o Nombre de la Empresa -->
                <div class="mb-4 md:mb-0">
                    <a href="{{ route('home') }}" target="__blank">
                        <img src="img/navbar.png" alt="invent" height="100px" width="100px">
                    </a>

                </div>
                <!-- Enlaces Rápidos -->
                <div class="flex space-x-6 mb-4 md:mb-0 texto-blanco1">
                    <a href="#" class="hover:text-indigo-400">Bienvenidos</a>
                    <a href="#ejes-temáticos" class="hover:text-indigo-400">Ejes Temáticos</a>
                    <a href="#edupod" class="hover:text-indigo-400">Edupod</a>
                    <a href="#conferencias" class="hover:text-indigo-400">Conferencias Transformadoras</a>
                    <a href="#mentores" class="hover:text-indigo-400">Mentores</a>
                    <a href="#programa" class="hover:text-indigo-400">Programa</a>
                    <a href="#moderadores" class="hover:text-indigo-400">Moderadores</a>
                </div>
                <!-- Redes Sociales -->
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/InventFormacioneInvestigacion" target="_blank"
                        class="hover:text-indigo-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.595 0 0 .595 0 1.325v21.351C0 23.405.595 24 1.325 24h11.495v-9.294H9.691V11.41h3.129V8.797c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.796.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.587l-.467 3.295h-3.12V24h6.116C23.405 24 24 23.405 24 22.675V1.325C24 .595 23.405 0 22.675 0z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/inventperu" target="_blank" class="hover:text-indigo-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 1.206.056 1.96.247 2.41.415a4.92 4.92 0 011.675 1.09 4.92 4.92 0 011.09 1.675c.168.45.359 1.204.415 2.41.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.206-.247 1.96-.415 2.41a4.92 4.92 0 01-1.09 1.675 4.92 4.92 0 01-1.675 1.09c-.45.168-1.204.359-2.41.415-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.206-.056-1.96-.247-2.41-.415a4.92 4.92 0 01-1.675-1.09 4.92 4.92 0 01-1.09-1.675c-.168-.45-.359-1.204-.415-2.41C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.056-1.206.247-1.96.415-2.41a4.92 4.92 0 011.09-1.675 4.92 4.92 0 011.675-1.09c.45-.168 1.204-.359 2.41-.415C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.131 4.667.332 3.758.74a7.072 7.072 0 00-2.583 1.678A7.072 7.072 0 00.74 4.999c-.408.909-.609 2.017-.668 3.294C.013 8.332 0 8.741 0 12c0 3.259.013 3.668.072 4.948.059 1.277.26 2.385.668 3.294a7.072 7.072 0 001.678 2.583 7.072 7.072 0 002.583 1.678c.909.408 2.017.609 3.294.668C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.277-.059 2.385-.26 3.294-.668a7.072 7.072 0 002.583-1.678 7.072 7.072 0 001.678-2.583c.408-.909.609-2.017.668-3.294.059-1.28.072-1.689.072-4.948s-.013-3.668-.072-4.948c-.059-1.277-.26-2.385-.668-3.294a7.072 7.072 0 00-1.678-2.583A7.072 7.072 0 0019.242.74c-.909-.408-2.017-.609-3.294-.668C15.668.013 15.259 0 12 0z" />
                            <path
                                d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998z" />
                            <circle cx="18.406" cy="5.594" r="1.44" />
                        </svg>
                    </a>
                    <a href="https://www.twitter.com/tuempresa" target="_blank" class="hover:text-indigo-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-8.384 4.482A13.942 13.942 0 011.671 3.149a4.916 4.916 0 001.523 6.574A4.903 4.903 0 01.964 9.1v.062a4.916 4.916 0 003.946 4.814 4.902 4.902 0 01-2.212.084 4.918 4.918 0 004.588 3.417A9.867 9.867 0 010 19.54a13.94 13.94 0 007.548 2.212c9.057 0 14.01-7.496 14.01-13.986 0-.213-.005-.425-.014-.636A10.012 10.012 0 0024 4.557z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/tuempresa" target="_blank" class="hover:text-indigo-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 448 512">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zm-46.44-340a53.72 53.72 0 11.08-107.44A53.72 53.72 0 0153.84 108zm394.4 340h-92.68V302.4c0-34.7-12.4-58.4-43.3-58.4-23.7 0-37.8 16-43.9 31.4-2.3 5.6-2.9 13.4-2.9 21.3V448h-92.68s1.2-236.9 0-261h92.68v37.1c12.3-19 34.3-46.1 83.4-46.1 60.8 0 106.2 39.6 106.2 124.4V448z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="text-center mt-6">
                <p class="text-sm texto-blanco">&copy; 2024 Invent. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts JS si es necesario -->
    <script>
        // Selecciona el botón flotante y el card alternativo
        const floatingButton = document.getElementById('floating-button');
        const alternativeCard = document.getElementById('alternative-card');
        const closeCardButton = document.getElementById('close-card');

        // Muestra el card alternativo al hacer clic en el botón flotante
        floatingButton.addEventListener('click', () => {
            alternativeCard.classList.toggle('hidden'); // Alterna la clase hidden
        });

        // Cierra el card alternativo al hacer clic en el botón de cerrar
        closeCardButton.addEventListener('click', () => {
            alternativeCard.classList.add('hidden'); // Agrega la clase hidden
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mostrar el banner con una animación suave
            setTimeout(function() {
                document.getElementById("announcement-bar").classList.remove("-translate-y-full");
            }, 700); // Se mostrará después de 0.7 segundos

            // Cerrar el banner y mostrar el modal
            document.getElementById("close-announcement").addEventListener("click", function() {
                document.getElementById("announcement-bar").classList.add("-translate-y-full");

                // Mostrar el modal con animación
                setTimeout(function() {
                    const modal = document.getElementById("second-event-modal");
                    modal.classList.remove("hidden");
                    setTimeout(function() {
                        modal.classList.remove("opacity-0",
                            "translate-y-10"
                        ); // Elimina las clases de opacidad y desplazamiento
                        modal.classList.add("opacity-100",
                            "translate-y-0"
                        ); // Aplica las clases de opacidad y desplazamiento al centro
                    }, 10); // Espera un breve momento antes de aplicar la animación
                }, 500); // Espera a que el banner se cierre
            });

            // Cerrar el modal
            document.getElementById("close-modal").addEventListener("click", function() {
                const modal = document.getElementById("second-event-modal");
                modal.classList.add("opacity-0", "translate-y-10"); // Aplica la animación de cierre
                setTimeout(function() {
                    modal.classList.add("hidden"); // Oculta el modal después de la animación
                }, 500); // Espera a que termine la animación
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Muestra el anuncio lateral después de 2 segundos
            setTimeout(function() {
                document.getElementById("side-announcement").classList.add("show");
            }, 2000); // Cambia el tiempo según sea necesario

            const sideAnnouncement = document.getElementById("side-announcement");

            // Cerrar el anuncio lateral
            document.getElementById("close-side-announcement").addEventListener("click", function() {
                sideAnnouncement.classList.remove("show");
                setTimeout(() => {
                    sideAnnouncement.classList.add("-translate-x-full");
                }, 500); // Espera a que termine la animación antes de ocultarlo
            });

            // Mostrar el anuncio lateral al acercar el mouse
            sideAnnouncement.addEventListener("mouseleave", function() {
                sideAnnouncement.classList.remove("show");
                sideAnnouncement.classList.add("-translate-x-full");
            });

            // Regresar el anuncio lateral al acercar el mouse a la posición oculta
            document.addEventListener("mousemove", function(event) {
                // Verifica si el mouse está cerca del borde izquierdo
                if (event.clientX < 50) { // Ajusta el valor según sea necesario
                    sideAnnouncement.classList.remove("-translate-x-full");
                    sideAnnouncement.classList.add("show");
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const initialPopup = document.getElementById("initial-popup");
            const closeInitialPopup = document.getElementById("close-initial-popup");

            // Cierra la ventana emergente cuando se presiona el botón "Cerrar"
            closeInitialPopup.addEventListener("click", function() {
                initialPopup.classList.add("hidden"); // Oculta la ventana emergente
            });

            // Opcional: mostrar automáticamente después de un tiempo
            // setTimeout(function() {
            //     initialPopup.classList.remove("hidden");
            // }, 1000);
        });
    </script>
    <script>
        // Selecciona los elementos del DOM
        const infoLink = document.getElementById('infoLink');
        const infoModal = document.getElementById('infoModal');
        const closeModal = document.getElementById('closeModal');

        // Mostrar el modal al hacer clic en "Más info"
        infoLink.addEventListener('click', (event) => {
            event.preventDefault(); // Evitar que el enlace recargue la página
            infoModal.classList.remove('hidden'); // Mostrar el modal
            infoModal.classList.add('show'); // Asegurarse de que se muestre
        });

        // Cerrar el modal al hacer clic en el botón de cerrar
        closeModal.addEventListener('click', () => {
            infoModal.classList.add('hidden'); // Ocultar el modal
            infoModal.classList.remove('show'); // Asegurarse de que se oculte
        });

        // Cerrar el modal al hacer clic fuera del contenido del modal
        infoModal.addEventListener('click', (event) => {
            if (event.target === infoModal) {
                infoModal.classList.add('hidden'); // Ocultar el modal
                infoModal.classList.remove('show'); // Asegurarse de que se oculte
            }
        });
    </script>

</body>

</html>
