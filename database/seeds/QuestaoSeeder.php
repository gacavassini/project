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
        ['descQuestao' => 'Salário', 'tipo' => 'Texto'],
        ['descQuestao' => 'Jornada', 'tipo' => 'Texto'],
      ];
      DB::table('questoes')->insert($dados);
    }
}
