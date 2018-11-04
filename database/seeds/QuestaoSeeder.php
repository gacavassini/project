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
        ['descQuestao' => 'Data de Admissão', 'tipo' => 'Texto'],
        ['descQuestao' => 'Data de Demissão', 'tipo' => 'Texto'],
        ['descQuestao' => 'Motivo que saiu', 'tipo' => 'Texto'],
        ['descQuestao' => 'Qual era a jornada de trabalho?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Tinha controle/registro de ponto?', 'tipo' => 'Texto'],
        ['descQuestao' => 'O registro era fiel?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Tinha horário de descanso?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Carteira era anotada?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Recebia mais alguma verba que não consta no holerite?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Quando saiu, recebeu verbas rescisórias?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Para qual função foi contratado?', 'tipo' => 'Texto'],
        ['descQuestao' => 'O que exatamente fazia?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Qual era seu salário?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Narre qualquer outra situação que possa ter te incomodado', 'tipo' => 'Texto'],
        ['descQuestao' => 'Tirou férias?', 'tipo' => 'Texto'],
        //em caso de problemas de saude
        ['descQuestao' => 'Quando começou a sentir dores? Narre a evoução ou acidente de trabalho', 'tipo' => 'Texto'],
        ['descQuestao' => 'Fez e/ou faz tratamento?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Chegou a se afastar?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Foi emitido CAT?', 'tipo' => 'Texto'],
        ['descQuestao' => 'Tem testemunhas?', 'tipo' => 'Texto'],

      ];
      DB::table('questoes')->insert($dados);
    }
}
