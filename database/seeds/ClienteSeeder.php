<?php

use Illuminate\Database\Seeder;
use App\User;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          ['nome' => 'Manuelito', 'rua' => 'Rua Bauru', 'numEndereco' => 123,
            'bairro' => 'Jardim do Carnaval', 'cep' => '12345-001',
            'cidade' => 'Mogi Guaçu', 'complemento' => 'Casa', 'cpf' => '123.456.789-10',
            'rg' => '12345678910', 'profissao' => 'Empreiteiro',
            'email' => '', 'telefoneRes' => '(19)3861-9078',
            'telefoneContato' => '(19)3861-9078', 'celular' => '(19)99123-5678',
            'estadoCivil' => 'Casado', 'cliStatus' => 'Ativo'],
          ['nome' => 'Luluzinha', 'rua' => 'Rua Tamanducaia', 'numEndereco' => 45,
            'bairro' => 'Jardim das Aleluias', 'cep' => '12734-012',
            'cidade' => 'Mogi Guaçu', 'complemento' => 'Casa', 'cpf' => '013.468.23-50',
            'rg' => '12345678910', 'profissao' => 'Secretária',
            'email' => 'lulu_sk8@gmail.com', 'telefoneRes' => '(19)3841-5715',
            'telefoneContato' => '(19)3861-9078', 'celular' => '(19)99592-0012',
            'estadoCivil' => 'Solteira', 'cliStatus' => 'Ativo'],
        ];

        DB::table('clientes')->insert($dados);
    }
}
