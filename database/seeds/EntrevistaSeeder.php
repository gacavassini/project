<?php

use Illuminate\Database\Seeder;
use App\Entrevista;

class EntrevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        ['codCliente' => 1, 'codEmpresa' => 2],
        ['codCliente' => 2, 'codEmpresa' => 1],
      ];
        DB::table('entrevistas')->insert($dados);
    }
}
