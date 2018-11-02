<?php

namespace App\Listeners;

use App\Events\PeticaoCriada;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GerarDoc
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
     * @param  PeticaoCriada  $event
     * @return void
     */
    public function handle(PeticaoCriada $event)
    {
        var_dump($event->peticao->toArray());
    }
}
