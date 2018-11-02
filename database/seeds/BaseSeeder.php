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
          ['codRot' => 1, 'rotulo' => 'Endereçamento', 'texto' => 'EXCELENTÍSSIMO (A) SENHOR (A) DOUTOR (A) JUIZ (A) DE DIREITO DA ____ VARA CÍVEL DA COMARCA DE MOGI GUAÇU/SP'],
          ['codRot' => 1, 'rotulo' => 'Endereçamento', 'texto' => 'EXCELENTÍSSIMO (A) SENHOR (A) DOUTOR (A) JUIZ (A) DA VARA DO TRABALHO DE MOGI GUAÇU/SP'],

          ['codRot' => 2, 'rotulo' => 'Qualificação do Cliente', 'texto' => 'nomeCliente, brasileira, estadoCivilCliente, profissãoCliente, CPF nº cpfCliente, RG nº rgCliente  SSP/SP, residente  e domiciliado à (enderecoCliente), por seu advogado que esta subscreve, vem, respeitosamente perante Vossa Excelência propor a presente'],

          ['codRot' => 3, 'rotulo' => 'Nome da Ação', 'texto' => 'RECLAMAÇÃO TRABALHISTA'],
          ['codRot' => 3, 'rotulo' => 'Nome da Ação', 'texto' => 'AÇÃO DE INDENIZAÇÃO'],
          ['codRot' => 3, 'rotulo' => 'Nome da Ação', 'texto' => 'AÇÃO DE COBRANÇA'],

          ['codRot' => 4, 'rotulo' => 'Qualificação Reclamada', 'texto' => ' em face de nomeEmpresa, inscrita no CNPJ - cnpjEmpresa,  com sede na (enderecoEmpresa), nos termos do artigo 840 e seguintes da C.L.T., pelos motivos de fato e de direito que passa a expor:'],

          ['codRot' => 5, 'rotulo' => 'Gratuidade Processual', 'texto' => 'I - DA JUSTIÇA GRATUITA1 - Esclarece o Reclamante que é pessoa pobre na acepção jurídica do termo, não estando em condições de demandar, sem sacrifício do sustento próprio e de seus familiares, motivo pelo qual, pede a concessão dos benefícios da JUSTIÇA GRATUITA, com fundamentos no artigo 4º da lei 1.060/50, com nova redação dada pela Lei 7.510/84, que para tanto encarte declaração de hipossuficiência em anexo.'],

          ['codRot' => 6, 'rotulo' => 'Dados do Contrato', 'texto' => 'II - DA ADMISSÃO, FUNÇÃO E SALÁRIO 2:-  O Reclamante foi admitido pela Reclamada na data de dataAdmissao, sendo demitido imotivadamente em dataDemissao. percebia à titulo de salário a importância de salarioCliente.
3: - O obreiro realizava a função de funcaoCliente, embora exercesse outras atividades não atinentes ao cargo, conforme se exporá.
4: –  A jornada de trabalho regular do obreiro se dava das jornadaCliente, porém também frequentemente laborava em horas extraordinárias, inclusive aos finais de semana.
5: - Algumas irregularidades marcaram o contrato de trabalho do Reclamante, motivo pelo qual se vale ele da presente medida.'],

          ['codRot' => 7, 'rotulo' => 'Introdução Pedido Vínculo', 'texto' => 'III - DO VÍNCULO DE EMPREGO E ANOTAÇÃO NA CTPS
7: - Em que pese a ausência de anotação do contrato de trabalho que existiu entre as partes na CTPS do Reclamante, imperioso que se reconheça o vínculo de emprego que os uniu, integralmente caracterizado nos termos da legislação trabalhista.
8: - Dispõe o artigo 3º da Consolidação das Leis do Trabalho:

Art. 3º - Considera-se empregado toda pessoa física que prestar serviços de natureza não eventual a empregador, sob a dependência deste e mediante salário.
Parágrafo único - Não haverá distinções relativas à espécie de emprego e à condição de trabalhador, nem entre o trabalho intelectual, técnico e manual.
 9: - A Reclamante, durante todo o período supramencionado, prestou serviços atinentes à função de Motoboy, diretamente ligada à atividade da empresa, sob completa subordinação à Reclamada, cumprindo os serviços, jornadas e determinações por ela estabelecidos.
10: - Além disso, o Reclamante laborou com habitualidade para a empresa-ré, cumprindo horário pré-definido por ela, em período integral, de quatro vezes por semana, por 1 (um) ano. Fê-lo, pessoalmente, sendo incabível, durante todo o pacto laboral, que outrem, que não o própria obreiro, prestasse o serviço.
11: - Pela prestação habitual, pessoal, exclusiva e subordinada, a Reclamada remunerava o obreiro com contraprestação salarial consistente na importância de R$ 50,00/R$60,00 por noite laborada mais entregas, o que totalizava uma média de R$1520,00 por mês.
12: - Denota-se, claramente, portanto, que se mostram satisfeitos todos os requisitos previstos na legislação trabalhista caracterizadores do vínculo empregatício, embora grande parte dos direitos trabalhistas tenha sido inadimplido sob a manobra de não ter se registrado o obreiro.
13: - Ainda assim, notório que o contrato de trabalho que existiu entre as partes ocorreu nos exatos termos aqui narrados, sendo insofismável a existência do vínculo de emprego.
14: - Destarte, requer-se, desde já, o reconhecimento do vínculo empregatício entre Reclamada e Reclamante, no período de 10 de janeiro de 2017 a 06 de março de 2018,  além de projeção de aviso prévio, com a respectiva anotação na CTPS da obreira, e demais direitos trabalhistas decorrentes da relação supra descrita.
'],
          ['codRot' => 8, 'rotulo' => 'TÍTULO - Das Verbas', 'texto' => 'IV - DA INDICAÇÃO DAS VERBAS DEVIDAS'],

          ['codRot' => 9, 'rotulo' => 'TÍTULO - Dos pedidos', 'texto' => 'V - DOS PEDIDOS Diante de tudo o quanto aqui exposto, a Reclamante pretende seja a Reclamada compelida a lhe pagar as verbas supracitadas, devidamente calculadas com base salarial percebida, acrescida dos valores decorrentes do acumulo de função, além de juros de mora e correções monetárias, quais sejam:'],

          ['codRot' => 10, 'rotulo' => 'Conclusão', 'texto' => 'Diante de tudo quanto foi exposto, requer-se a notificação da Reclamada, para contestar a presente ação reclamatória em todos os termos, sob pena de revelia e que ao final, que todos os pedidos ora formulados sejam julgados PROCEDENTES, com a condenação da Reclamada em todas as verbas indicadas, devidamente corrigidas monetariamente e acrescidas de juros de mora e multa pelo atraso no pagamento, respondendo ainda, pelas custas e despesas processuais e demais cominações legais aplicáveis.
Requer provar o alegado por todos os meios de prova admitidos, em especial pelo depoimento do demandado ou de seu representante legal, que desde já se requer, sob pena de confissão ficta, bem como a oitiva de testemunhas, que oportunamente serão arroladas.
Dá-se a causa o valor de R$
Termos em que,
Pede Deferimento.
Mogi Guaçu, 31 de janeiro de 2018.
Maílson Luiz Brandão
OAB.SP 264.979
'],
        ];

        DB::table('bases')->insert($dados);
    }
}
