<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;

class CorreoContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contacto')
            ->from($this->mensaje['email'], $this->mensaje['nombre'])
            ->subject($this->mensaje['asunto']);
    }
}
