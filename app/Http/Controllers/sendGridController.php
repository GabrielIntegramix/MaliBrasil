<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as controller;
use App\Mail\sendEmail;
use Mail;

class SendGridController extends controller
{
    public function send_email(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $telefone = $_POST['telefone'];
        $data = [
            'nome' => $nome,
            'mensagem' => $mensagem,
            'telefone'=> $telefone,
            'email'=>$email
        ];
        Mail::to($email)->send(new sendEmail($data));
    }
}
