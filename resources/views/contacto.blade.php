@extends('layout.plantilla')

@section('contenido')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class=" mb-4">
                    <br>
                    <h4 class=" text-white px-3 mb-0 programa1">Redes Sociales</h4>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 col-xl-4 contact-form wow fadeInLeft" data-wow-delay="0.4s">
                    <h2 class="display-5 text-white mb-4 programa1" style="text-align: center">Formulario</h2>
                    <p class="mb-4 text-white texto">Comunícate con nosotros !</p>
                    <form id="formulario-mensaje" action="{{ route('enviarFormulario') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-1 shadow-sm" id="nombre"
                                        name="nombre" placeholder="Nombre">
                                    <label for="nombre" class="text-secondary">Nombre</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-white border-1 shadow-sm" id="celular"
                                        name="celular" placeholder="Celular">
                                    <label for="celular" class="text-secondary">Celular</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0 shadow-sm" id="email"
                                        name="email" placeholder="Correo Electrónico">
                                    <label for="email" class="text-secondary">Correo Electrónico</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0 shadow-sm" id="asunto"
                                        name="asunto" placeholder="Asunto">
                                    <label for="asunto" class="text-secondary">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0 shadow-sm" id="mensaje" name="mensaje" style="height: 10rem"
                                        placeholder="Mensaje"></textarea>
                                    <label for="mensaje" class="text-secondary">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-white w-100 py-3">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-transparent rounded">
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                style="width: 50px; height: 50px; border-radius: 3.125rem;"><i
                                    class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <p class="mb-0 text-white programa2">Av. Jacarandas 98 - Casa Grande </p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                style="width: 50px; height: 50px; border-radius: 3.125rem;"><i
                                    class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <p class="mb-0 text-white programa2">+51 996 602 243</p>
                        </div>

                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                style="width: 50px; height: 50px; border-radius: 3.125rem;"><i
                                    class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <p class="mb-0 text-white programa2">formacion@inventsoluciones.com.pe</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-lg-square btn-light rounded-circle mx-1"
                            href="https://web.facebook.com/InventFormacioneInvestigacion" target="_blank"><i
                                class="fab fa-facebook-f" style="font-size: 30px;"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-1"
                            href="https://www.linkedin.com/in/inventperu" target="_blank"><i class="fab fa-linkedin"
                                style="font-size: 30px;"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-1"
                            href="https://www.instagram.com/inventperu/" target="_blank"><i class="fab fa-instagram"
                                style="font-size: 30px;"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-1"
                            href="https://www.tiktok.com/@inventperu" target="_blank"><i class="fab fa-tiktok"
                                style="font-size: 30px;"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-1"
                            href="https://api.whatsapp.com/send?phone=996602243" target="_blank"><i
                                class="fab fa-whatsapp" style="font-size: 30px;"></i></a>


                    </div>
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 31.25rem;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.3620340256091!2d-79.1868605305415!3d-7.742198170637144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad5a1b01faf301%3A0x880662ce62740057!2sAv.%20Jacarandas%2098%2C%20Casa%20Grande%2013761%2C%20Peru!5e0!3m2!1sen!2sbd!4v1712820156414!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener referencia al formulario
            const formulario = document.getElementById("formulario-mensaje");

            // Agregar evento submit al formulario
            formulario.addEventListener("submit", function(event) {
                // Evitar que el formulario se envíe automáticamente
                event.preventDefault();

                // Crear la alerta
                const alerta = document.createElement("div");
                alerta.textContent =
                    '¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.';
                alerta.style.backgroundColor = "#00a1a1";
                alerta.style.color = "white";
                alerta.style.padding = "20px";
                alerta.style.textAlign = "center";
                alerta.style.borderRadius = "5px";
                alerta.style.marginBottom = "20px";

                // Insertar la alerta antes del formulario
                formulario.parentNode.insertBefore(alerta, formulario);

                // Eliminar la alerta después de 3 segundos
                setTimeout(function() {
                    alerta.remove();
                }, 3000);

                // Enviar el formulario
                formulario.submit();
            });
        });
    </script>
@endsection
