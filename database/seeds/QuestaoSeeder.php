<?php

use Illuminate\Database\Seeder;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados=[
        ['descQuestao' => 'Data de Admissão'],
        ['descQuestao' => 'Data de Demissão'],
        ['descQuestao' => 'Motivo que saiu'],
        ['descQuestao' => 'Qual era a jornada de trabalho?'],
        ['descQuestao' => 'Tinha controle/registro de ponto?'],
        ['descQuestao' => 'O registro era fiel?'],
        ['descQuestao' => 'Tinha horário de descanso?'],
        ['descQuestao' => 'Carteira era anotada?'],
        ['descQuestao' => 'Recebia mais alguma verba que não consta no holerite?'],
        ['descQuestao' => 'Quando saiu, recebeu verbas rescisórias?'],
        ['descQuestao' => 'Para qual função foi contratado?'],
        ['descQuestao' => 'O que exatamente fazia?'],
        ['descQuestao' => 'Qual era seu salário?'],
        ['descQuestao' => 'Narre qualquer outra situação que possa ter te incomodado'],
        ['descQuestao' => 'Tirou férias?'],
        //em caso de problemas de saude
        ['descQuestao' => 'Quando começou a sentir dores? Narre a evoução ou acidente de trabalho'],
        ['descQuestao' => 'Fez e/ou faz tratamento?'],
        ['descQuestao' => 'Chegou a se afastar?'],
        ['descQuestao' => 'Foi emitido CAT?'],
        ['descQuestao' => 'Tem testemunhas?'],

      ];
      DB::table('questoes')->insert($dados);
    }
}
