<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
          ['nomePedido' => 'Hora Extra', 'tipo' => true, 'fundamento' => '', 'resumo' => 'Aqui vai um resumo que vai no titulo dos pedidos.'],
          ['nomePedido' => 'DO VÍNCULO DE EMPREGO E ANOTAÇÃO NA CTPS',
            'tipo' => false, 'fundamento' => '', 'resumo' => 'Em que pese a ausência de anotação do contrato de trabalho que existiu entre as partes na CTPS do Reclamante, imperioso que se reconheça o vínculo de emprego que os uniu, integralmente caracterizado nos termos da legislação trabalhista'],
          ['nomePedido' => 'DA TAXA DE SERVIÇO', 'tipo' => false, 'fundamento' => 'Diante do exposto, importa desde logo requerer seja o importe de R$1.600,00 considerado para todos os fins como o salário do Reclamante, de modo que todas as demais verbas sejam sobre ele calculadas.

b) das diferenças no pagamento das taxas de serviço.
Certo é que o contrato verbal estabelecido entre as partes possui a mesma força, e guarda os mesmos deveres de observância e boa-fé que os escritos, possuindo, por conseguinte, a mesma validade.

22: - Não se pode admitir que, por qualquer motivo que seja, a Reclamada simplesmente se abstenha de pagar o quanto devido e acordado com o empregado, trata-se de inadimplemento, trate-se de “mudança de ideia” da empresa que já não via conveniência no pacto inicial – prática, aliás, expressamente probida pelo ordenamento jurídico brasileiro (art. 468 da CLT). ',
          'resumo' => 'Desta forma, uma vez acordado o valor de R$2,00 por entrega realizada, sem exceções,  deve a Reclamada ser condenada ao pagamento de todas as referidas taxas inadimplidas, no importe de 10 por noite, totalizando R$320,00 por mês, haja vista a média de 4 dias laborados por semana (nem se incluindo os feriados), tudo devidamente corrigido e acrescido de juros. '],
        ];
        DB::table('pedidos')->insert($dados);
    }
}
