<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(BaseSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(EntrevistaSeeder::class);
        $this->call(QuestaoSeeder::class);
        $this->call(EntrevistaQuestaoSeeder::class);
    }
}
