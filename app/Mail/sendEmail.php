<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = "gabriel.ol.teo@outlook.com";
        $subject = 'Envio de formulario Mali Brasil';
        $name = 'Mali Brasil';

        return $this->markdown('email.form-home')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 
                        'nome' => $this->data['nome'],
                        'mensagem' => $this->data['mensagem'],
                        'telefone' => $this->data['telefone'],
                        'email' => $this->data['email']
                    ]);
    }
}