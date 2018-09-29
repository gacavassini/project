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
          ['codRot' => 1, 'rotulo' => 'Endereçamento', 'texto' => 'EXCELENTÍSSIMO (a) SENHOR (a) DOUTOR (a) JUIZ (a) DE DIREITO DA
VARA ÚNICA DO TRABALHO DA COMARCA DE MOGI GUAÇU/SP'],
          ['codRot' => 1, 'rotulo' => 'Endereçamento', 'texto' => 'EXCELENTÍSSIMO (a) SENHOR (a) DOUTOR (a) JUIZ (a) DE DIREITO DA
VARA ÚNICA DO TRABALHO DA COMARCA DE MOGI MIRIM/SP'],
          ['codRot' => 2, 'rotulo' => 'Informação do Cliente', 'texto' => 'HUGO FRANCISCO PELEGRINO, brasileiro,
solteiro, motoboy, portador da cédula de identidade RG nº 42480299
SSP/SP e inscrito no CPF/MF sob o nº 457.973.108-56, residente e
domiciliado à Rua Adolto Guedes, nº 28, Jd. Zaniboni, Município de
Mogi Guaçu/SP, por seu advogado infra-assinado, com o devido
instrumento de mandato incluso (doc.01), vem, respeitosamente
perante a Ilustre presença de Vossa Excelência propor a presente:'],
        ];

        DB::table('bases')->insert($dados);
    }
}
