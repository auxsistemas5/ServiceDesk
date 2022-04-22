<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "NOTIFICACION MESA DE AYUDA";
    public $caso;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($caso)
    {
        $this->caso = $caso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.notificacion');
    }
}
