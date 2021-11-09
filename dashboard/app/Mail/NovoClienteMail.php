<?php

namespace App\Mail;

use App\Models\Cliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoClienteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $cliente;
    public $data_cadastro;
    public $url;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = date('d/m/Y', strtotime( $cliente->cliente));
        $this->data_cadastro = $cliente->data_cadastro;
        $this->url = 'http://localhost:8000/cliente/'.$cliente->id;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.novo-cliente')->subject('Novo cliente criado');
    }
}
