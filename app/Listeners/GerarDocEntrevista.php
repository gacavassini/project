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
        $html = '<h2>Entrevista '.$entrevista->cliente->nome.' na '.$entrevista->created_at.'</h2>';
        foreach($entrevista->entrevistasQuestoes as $eq){
            $html .= '<p><strong>'.$eq->questao->descQuestao.'</strong>: '.$eq->descResposta.'</p>';
        }
        $html .= "<br><br><br><p style='text-align: justify; '> Afirmo que as informações deste
    documento foram declaradas por mim e poderão ser usadas em um processo judicial. </p> <br><br>";
        $html .= '<div style="width: 95%;display: inline-block; margin-left: 220px;" >';
        $html .= '<div style="width: 40%; text-align: center; display: inline-block;"> ';
        $html .= '<p>  ___________________________________________<br>  '.$entrevista->cliente->nome.' <br> '.$entrevista->cliente->cpf.'</p></div>';
        $html .= '<div style="width: 40%; text-align: center;"> ';
        $html .= '<p><br><br>  ___________________________________________<br>  Advogado <br></p></div></div>';

        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHtml($html);

        $dompdf->save(base_path('storage/documentos/'.$clienteNome.'/'.$nomeArquivo));
    }
}
