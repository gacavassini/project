<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          ['nome' => 'Pastelaria Uncle Sam', 'rua' => 'Avenida 4 de Julho',
            'numEndereco' => 4, 'bairro' => 'Bairro da Liberdade', 'cep' => '14582-105',
            'cidade' => 'Mogi Guaçu', 'complemento' => '',
            'cnpj' => 98367248000123, 'telefone' => '(19)3891-8493'],
          ['nome' => 'Papelaria Cosme e Damião', 'rua' => 'Rua Didi Mocó',
            'numEndereco' => 76, 'bairro' => 'Centro', 'cep' => '13841-023',
            'cidade' => 'Mogi Guaçu', 'complemento' => 'Segundo Andar',
            'cnpj' => 74487255000172, 'telefone' => '(19)3841-1484']
        ];

        DB::table('empresas')->insert($dados);
    }
}
