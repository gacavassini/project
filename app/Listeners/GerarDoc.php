<?php

namespace App\Listeners;

use App\Peticao;
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
        $peticao = $event->peticao;
        $entrevista = $peticao->entrevista;
        $cliente = $entrevista->cliente;

        $date = new \DateTime($entrevista->created_at);
        $formatDate = $date->format('ddmmYYYY');
        $nomeArquivo = str_replace(' ', '', $cliente->nome)."_".$formatDate.".doc";

        /*header("Content-type: applicayion/vnd.ms-word");
        header("content-Disposition: attachment;Filename=".$nomeArquivo);
        header("Pragma: no-cache");
        header("Expires: 0");
        echo $peticao->fatos;*/

        \Log::info('criada', ['peticao' => $peticao,
          'dataEntrevista' => $formatDate, 'cliente' => $cliente->nome,
          'nomeDoArquivo' => $nomeArquivo]);
    }
}
