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
        ['codCliente' => 1, 'codEmpresa' => 2, 'created_at' => date("Y-m-d H:i:s")],
        ['codCliente' => 2, 'codEmpresa' => 1, 'created_at' => date("Y-m-d H:i:s")],
      ];
        DB::table('entrevistas')->insert($dados);
    }
}
