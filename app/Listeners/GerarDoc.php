<?php

namespace App\Listeners;

use App\Peticao;
use App\Events\PeticaoCriada;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

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
        $formatDate = $date->format('dmY');
        $clienteNome = str_replace(' ', '', $cliente->nome);
        $nomeArquivo = $clienteNome."_".$formatDate.".pdf";

        //=====================================================
        //$pdf = \App::make('dompdf.wrapper');
        //$pdf->loadHTML($peticao->fatos);
        //=====================================================

        // \Log::info('criada', ['peticao' => $peticao,
        //   'dataEntrevista' => $formatDate, 'cliente' => $cliente->nome,
        //   'nomeDoArquivo' => $nomeArquivo]);

        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHtml($peticao->fatos);

        $dompdf->save(base_path('storage/documentos/'.$clienteNome.'/'.$nomeArquivo));
    }
}
