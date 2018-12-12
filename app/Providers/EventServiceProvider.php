<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\PeticaoCriada' => [
            'App\Listeners\GerarDoc',
        ],
        'App\Events\ClienteCriado' => [
          'App\Listeners\CriaPastaCliente',
        ],
        'App\Events\EntrevistaCriada' => [
            'App\Listeners\GerarDocEntrevista',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
