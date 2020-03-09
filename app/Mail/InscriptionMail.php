<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InscriptionMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Elements de contact
     * @var array
     */
    public $userInformation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userInformation)
    {
        $this->userInformation = $userInformation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply.airlife@gmail.com')
            ->view('emails.inscription');
    }
}
