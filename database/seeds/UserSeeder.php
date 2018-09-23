<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          ['name' => 'Admin', 'email' => 'admin@libellus.com.br',
            'password' => bcrypt('admin123')],
          ['name' => 'Teste', 'email' => 'teste@libellus.com.br',
            'password' => bcrypt('teste123')],
        ];

        DB::table('users')->insert($dados);
    }
}
