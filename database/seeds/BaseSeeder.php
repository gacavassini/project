<?php

use Illuminate\Database\Seeder;
use App\Base;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          ['codRot' => 0, 'rotulo' => '', 'texto' => ''],
          ['codRot' => 0, 'rotulo' => '', 'texto' => ''],
        ];

        DB::table('bases')->insert($dados);
    }
}
