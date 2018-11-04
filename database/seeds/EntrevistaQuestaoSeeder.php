<?php

use Illuminate\Database\Seeder;
use App\EntrevistaQuestao;

class EntrevistaQuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        ['eq_codEntrevista' => 1, 'eq_codQuestao' => 1, 'descResposta' => '27/05/2008'],
        ['eq_codEntrevista' => 1, 'eq_codQuestao' => 2, 'descResposta' => '07/08/2012'],
        ['eq_codEntrevista' => 1, 'eq_codQuestao' => 13, 'descResposta' => 'R$780,00'],
        ['eq_codEntrevista' => 1, 'eq_codQuestao' => 4, 'descResposta' => 'Seg a Sex'],
        ['eq_codEntrevista' => 1, 'eq_codQuestao' => 11, 'descResposta' => 'Vendedor'],

        ['eq_codEntrevista' => 2, 'eq_codQuestao' => 1, 'descResposta' => '07/08/2012'],
        ['eq_codEntrevista' => 2, 'eq_codQuestao' => 2, 'descResposta' => '07/12/2012'],
        ['eq_codEntrevista' => 2, 'eq_codQuestao' => 13, 'descResposta' => 'R$1523,64'],
        ['eq_codEntrevista' => 2, 'eq_codQuestao' => 11, 'descResposta' => 'Secretária'],
      ];
      DB::table('entrevistas_questoes')->insert($dados);
    }
}
