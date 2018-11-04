<?php

namespace App\Listeners;

use App\Events\ClienteCriado;
use App\Cliente;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use File;

class CriaPastaCliente
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ClienteCriado  $event
     * @return void
     */
    public function handle(ClienteCriado $event)
    {
        $cliente = $event->cliente;
        $path = base_path('storage/documentos/'.str_replace(' ', '', $cliente->nome).'/');
        File::makeDirectory($path, 0777, true);
    }
}
