<?php

namespace App\Listeners;

use App\Entrevista;
use App\Events\EntrevistaCriada;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

class GerarDocEntrevista
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
     * @param  EntrevistaCriada  $event
     * @return void
     */
    public function handle(EntrevistaCriada $event)
    {
        $entrevista = $event->entrevista;
        $cliente = $entrevista->cliente;

        $date = new \DateTime($entrevista->created_at);
        $formatDate = $date->format('dmY');
        $clienteNome = str_replace(' ', '', $cliente->nome);
        $nomeArquivo = $clienteNome."_Entrevista_".$formatDate.".pdf";

        //Entrevista::where('codEntrevista', $entrevista->codEntrevista)->update(['filename' => $nomeArquivo]);


        //=====================================================
        //$pdf = \App::make('dompdf.wrapper');
        //$pdf->loadHTML($peticao->fatos);
        //=====================================================

        // \Log::info('criada', ['peticao' => $peticao,
        //   'dataEntrevista' => $formatDate, 'cliente' => $cliente->nome,
        //   'nomeDoArquivo' => $nomeArquivo]);
        $html = '';
        foreach($entrevista->entrevistasQuestoes as $eq){
            $html .= '<p><strong>'.$eq->questao->descQuestao.'</strong>: '.$eq->descResposta.'</p>';
        }
        $html .= "<br /><br /><br />";

        \Log::info('html', [$html]);

        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHtml($html);

        $dompdf->save(base_path('storage/documentos/'.$clienteNome.'/'.$nomeArquivo));
    }
}
