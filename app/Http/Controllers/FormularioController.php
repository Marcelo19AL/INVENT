<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoContacto;

class FormularioController extends Controller
{


    public function enviarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'celular' => 'required|numeric|max:15',
            'email' => 'required|email|max:255',
            'asunto' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        // Enviar el correo electrónico utilizando la plantilla de correo 'CorreoContacto'
        Mail::to('contacto@inventsoluciones.com.pe')->send(new CorreoContacto($request->all()));

        // Redirigir de vuelta al formulario con un mensaje de éxito
        return redirect()->back()->with('success', '¡Mensaje enviado correctamente! Nos pondremos en contacto contigo pronto.');
    }
}
