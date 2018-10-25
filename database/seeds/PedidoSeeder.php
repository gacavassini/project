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
      //tipo true padrao / false especifico
        $dados = [
          ['nomePedido' => 'Intrajornada', 'tipo' => false, 'fundamento' => '- Durante os 3 primeiros anos do contrato de trabalho (2014-2017), a Reclamante não podia usufruir de uma hora de intervalo para refeição/descanso. Realizava horário corrido, alimentando-se e voltando imediatamente para a máquina, fazendo no máximo 30 minutos de intervalo. Somente após 2017 é que começou a ter a possibilidade de gozar de período regular de descanso.

          26: - Vê-se, portanto, que a obreira cumpria jrnada de quase 10 (dez)horas diárias, sem possibilidade de usufruir intervalo intrajornada regularente, o que é absolutamente rechaçado pelo ordenamento jurídico brasileiro.

          27 - No entanto, certo é que a concessão de intervalo de intrajornadas é imprescindível, haja vista uma vez que tem a finalidade de assegurar a higidez física e mental dos trabalhadores, amparado em normas de saúde, higiene e segurança do Trabalho, conforme dispõe o Art. 7º Inciso XXII da CF/88.



          Art. 71 - Em qualquer trabalho contínuo, cuja duração exceda de 6 (seis) horas, é obrigatória a concessão de um intervalo para repouso ou alimentação, o qual será, no mínimo, de 1 (uma) hora e, salvo acordo escrito ou contrato coletivo em contrário, não poderá exceder de 2 (duas) horas.

          § 1º - Não excedendo de 6 (seis) horas o trabalho, será, entretanto, obrigatório um intervalo de 15 (quinze) minutos quando a duração ultrapassar 4 (quatro) horas.



          28:- Em decorrência das supressões dos respectivos intervalos de intrajornadas, resta devida total remuneração desses intervalos na ordem de 1 (uma) hora por dia de trabalho, acrescidos de adicional de 50%, conforme previsto no art. 71 da CLT., e Súmula 437 do TST, referente a todo período contratual.

          Art.71 da CLT - § 4º “Quando o intervalo para repouso e alimentação, previsto neste artigo, não for concedido pelo empregador, este ficará obrigado a remunerar o período correspondente com um acréscimo de no mínimo cinquenta por cento sobre o valor da remuneração da hora normal de trabalho”.





          Súmula nº 437 do TST

          INTERVALO INTRAJORNADA PARA REPOUSO E ALIMENTAÇÃO. APLICAÇÃO DO ART. 71 DA CLT (conversão das Orientações Jurisprudenciais nºs 307, 342, 354, 380 e 381 da SBDI-1) - Res. 185/2012, DEJT divulgado em 25, 26 e 27.09.2012

           I - Após a edição da Lei nº 8.923/94, a não-concessão ou a concessão parcial do intervalo intrajornada mínimo, para repouso e alimentação, a empregados urbanos e rurais, implica o pagamento total do período correspondente, e não apenas daquele suprimido, com acréscimo de, no mínimo, 50% sobre o valor da remuneração da hora normal de trabalho (art. 71 da CLT), sem prejuízo do cômputo da efetiva jornada de labor para efeito de remuneração.

          II - É inválida cláusula de acordo ou convenção coletiva de trabalho contemplando a supressão ou redução do intervalo intrajornada porque este constitui medida de higiene, saúde e segurança do trabalho, garantido por norma de ordem pública (art. 71 da CLT e art. 7º, XXII, da CF/1988), infenso à negociação coletiva.

          III - Possui natureza salarial a parcela prevista no art. 71, § 4º, da CLT, com redação introduzida pela Lei nº 8.923, de 27 de julho de 1994, quando não concedido ou reduzido pelo empregador o intervalo mínimo intrajornada para repouso e alimentação, repercutindo, assim, no cálculo de outras parcelas salariais.

          IV - Ultrapassada habitualmente a jornada de seis horas de trabalho, é devido o gozo do intervalo intrajornada mínimo de uma hora, obrigando o empregador a remunerar o período para descanso e alimentação não usufruído como extra, acrescido do respectivo adicional, na forma prevista no art. 71, caput e § 4º da CLT.



          29: - Há ainda que se estabelecer duas ressalvas. As modificações em referido artigo oriundas da Reforma Trabalhista não possuem qualquer validade em relação ao contrato em tela, uma vez ter se estabelecido sob a égide da legislação anterior.

          30: - Desta feita, tendo havido supressão do horário intervalar pelo empregador durante todo o contrato, fica obrigado em remunerar o empregado em uma hora diária, acrescida de adicional mínimo de 50%, calculado sobre a remuneração do trabalhador. Outrossim, faz jus o obreiro aos respectivos reflexos nas demais verbas, como férias + 1/3, 13º salários, DSR’s, FGTS + 40%, Aviso Prévio, Adicional de Periculosidade e insalubridade, face a natureza remuneratória da verba pleiteada, além de juros e correções monetárias, conforme legislação em vigor.

          31: - Finalmente, deve a Reclamada apresentar os cartões de ponto do obreiro, sob pena de serem considerados jamais usufruídos pelo obreiro, nos termos dos artigos 396 a 400 do Código de Processo Civil.', 'resumo' => 'Desta feita, tendo havido supressão do horário intervalar pelo empregador durante todo o contrato, fica obrigado em remunerar o empregado em uma hora diária, acrescida de adicional mínimo de 50%, calculado sobre a remuneração do trabalhador. Outrossim, faz jus o obreiro aos respectivos reflexos nas demais verbas, como férias + 1/3, 13º salários, DSR’s, FGTS + 40%, Aviso Prévio, Adicional de Periculosidade e insalubridade, face a natureza remuneratória da verba pleiteada, além de juros e correções monetárias, conforme legislação em vigor. Finalmente, deve a Reclamada apresentar os cartões de ponto do obreiro, sob pena de serem considerados jamais usufruídos pelo obreiro, nos termos dos artigos 396 a 400 do Código de Processo Civil.'],

          ['nomePedido' => 'Depósito FGTS',
            'tipo' => false, 'fundamento' => '21: - A Reclamada, não tendo sequer registrado o Reclamante, também jamais realizou depósitos de qualquer valor referente ao FGTS que é devido, conforme preceitua a lei n. 8036/90.



            Art. 15. Para os fins previstos nesta lei, todos os empregadores ficam obrigados a depositar, até o dia 7 (sete) de cada mês, em conta bancária vinculada, a importância correspondente a 8 (oito) por cento da remuneração paga ou devida, no mês anterior, a cada trabalhador, incluídas na remuneração as parcelas de que tratam os arts. 457 e 458 da CLT e a gratificação de Natal a que se refere a Lei nº 4.090, de 13 de julho de 1962, com as modificações da Lei nº 4.749, de 12 de agosto de 1965.



            22: - Ademais, além de tais valores serem ainda devidos ao Reclamante, em decorrência do atraso para o depósito, deverá haver incidência de multa, nos termos do supramencionado diploma legal.



             Art. 22. O empregador que não realizar os depósitos previstos nesta Lei, no prazo fixado no art. 15, responderá pela incidência da Taxa Referencial – TR sobre a importância correspondente. (Redação dada pela Lei nº 9.964, de 2000)

            § 1o Sobre o valor dos depósitos, acrescido da TR, incidirão, ainda, juros de mora de 0,5% a.m. (cinco décimos por cento ao mês) ou fração e multa, sujeitando-se, também, às obrigações e sanções previstas no Decreto-Lei no 368, de 19 de dezembro de 1968. (Redação dada pela Lei nº 9.964, de 2000)

            § 2o A incidência da TR de que trata o caput deste artigo será cobrada por dia de atraso, tomando-se por base o índice de atualização das contas vinculadas do FGTS. (Redação dada pela Lei nº 9.964, de 2000)

            § 2o-A. A multa referida no § 1o deste artigo será cobrada nas condições que se seguem: (Incluído pela Lei nº 9.964, de 2000)

            I – 5% (cinco por cento) no mês de vencimento da obrigação; (Incluído pela Lei nº 9.964, de 2000)

            II – 10% (dez por cento) a partir do mês seguinte ao do vencimento da obrigação. (Incluído pela Lei nº 9.964, de 2000)

            § 3o Para efeito de levantamento de débito para com o FGTS, o percentual de 8% (oito por cento) incidirá sobre o valor acrescido da TR até a data da respectiva operação.



            23: - Houve, por derradeiro, claro descumprimento à determinação legal e, por conseguinte, macularam-se direitos trabalhistas garantidos pelo ordenamento jurídico brasileiro.



            24: - Assim, faz jus o Reclamante ao valor referente ao depósito mensal a título de FGTS, no percentual de 8% sobre sua remuneração aqui exposta como devida, inclusos adicionais, acrescidos das multas previstas no artigo 22 da Lei 8036/90, além dos 40%, bem como deve a Reclamada apresentar os comprovantes de depósitos pertinentes a todos os meses em que vigeu o contrato de trabalho.', 'resumo' => '3: - Faz jus a Reclamante ao valor referente ao depósito mensal a título de FGTS, no percentual de 8% sobre sua remuneração aqui exposta como devida, inclusos adicionais, acrescidos das multas previstas no artigo 22 da Lei 8036/90, além dos 40%, bem como deve a Reclamada apresentar os comprovantes de depósitos pertinentes a todos os meses em que vigeu o contrato de trabalho;'],

          ['nomePedido' => 'Seguro Desemprego', 'tipo' => false, 'fundamento' => '33: - Em caso de não conseguir a Reclamante se habilitar em seguro desemprego, por não ter sido registrada e não ter recebido as guias em tempo oportuno, requer-se desde já que haja a condenação da empresa-ré ao pagamento de indenização substitutiva ao seguro desemprego a que teria direito, nos termos da Súmula 389 do TST, o que desde já se requer.



          SEGURO-DESEMPREGO. COMPETÊNCIA DA JUSTIÇA DO TRABALHO. DIREITO À INDENIZAÇÃO POR NÃO LIBERAÇÃO DE GUIAS (conversão das Orientações Jurisprudenciais nºs 210 e 211 da SBDI-1) - Res. 129/2005, DJ 20, 22 e 25.04.2005

          I - Inscreve-se na competência material da Justiça do Trabalho a lide entre empregado e empregador tendo por objeto indenização pelo não-fornecimento das guias do seguro-desemprego. (ex-OJ nº 210 da SBDI-1 - inserida em 08.11.2000)

          II - O não-fornecimento pelo empregador da guia necessária para o recebimento do seguro-desemprego dá origem ao direito à indenização. (ex-OJ nº 211 da SBDI-1 - inserida em 08.11.2000)',
          'resumo' => '33: - Em caso de não conseguir a Reclamante se habilitar em seguro desemprego, por não ter sido registrada e não ter recebido as guias em tempo oportuno, requer-se desde já que haja a condenação da empresa-ré ao pagamento de indenização substitutiva ao seguro desemprego a que teria direito, nos termos da Súmula 389 do TST, o que desde já se requer.'],

          ['nomePedido' => 'Horas extras', 'tipo' => false, 'fundamento' => '22: - Como exposto, a Reclamante sempre laborou de segunda a sexta-feira das 08:00hs às 18:00hs, com 1 (uma) hora de intervaLo para refeição, e de sábado, das 08:00hs às 12:00hs. Além disso, costumeiramente trabalhavam nos sábados o dia todo para realizaçao de eventos, mas não anotavam o ponto em tais ocasiões e também não recebiam.



          23: - Evidente, portanto, que as horas laboradas pelo Reclamante excediam o limite de labor diário e semanal estabelecido pelo artigo 7º, inciso XIII e artigo 58 da CLT.



          24: - Ocorre que, como se não bastasse sua excessiva jornada que não observava o limite de labor indispensável para a qualidade de vida do obreiro, a Reclamante não recebeu a integralidade das horas extras que lhe eram devidas, como se denota pela análise de seus holerites, em que eram pagas apenas algumas horas.



          25: - A Reclamante pleiteia, portanto, o pagamento da diferenças ainda não quitadas das horas extras excedentes da 8º diária ou 44º semanal, a serem oportunamente apuradas, acrescidas de adicional de 50% sobre as horas extraordinárias realizadas de segunda à sexta (Art.7º Inciso XVI CF/88) de todo o pacto laboral, além da integração no aviso prévio, DSR’S, 13º salários, férias com 1/3, FGTS+40% de multa. Requer-se ainda sejam as Reclamadas condenadas a apresentarem documentos relativos aos eventos realizados aos sábados para auferição de horas extras.',
            'resumo' => '25: - A Reclamante pleiteia, portanto, o pagamento da diferenças ainda não quitadas das horas extras excedentes da 8º diária ou 44º semanal, a serem oportunamente apuradas, acrescidas de adicional de 50% sobre as horas extraordinárias realizadas de segunda à sexta (Art.7º Inciso XVI CF/88) de todo o pacto laboral, além da integração no aviso prévio, DSR’S, 13º salários, férias com 1/3, FGTS+40 de multa. Requer-se ainda sejam as Reclamadas condenadas a apresentarem documentos relativos aos eventos realizados aos sábados para auferição de horas extras.'],

          ['nomePedido' => 'Multas 467 e 477', 'tipo' => false, 'fundamento' => '41: - Não pagando corretamente as verbas rescisórias do obreiro, por óbvio, a Reclamada extrapolou o prazo de que trata o respectivo artigo 477 da CLT, assim, a Reclamante faz jus a perceber a multa prevista na base da maior remuneração mensal percebida pelo empregado demitido.



          42: - A Reclamada fica obrigada a pagar à Reclamante na primeira audiência a parte incontroversa das verbas rescisórias faltantes, sob pena de pagá-las acrescidas de 50%.', 'resumo' => 'Não pagando corretamente as verbas rescisórias do obreiro, por óbvio, a Reclamada extrapolou o prazo de que trata o respectivo artigo 477 da CLT, assim, a Reclamante faz jus a perceber a multa prevista na base da maior remuneração mensal percebida pelo empregado demitido.  A Reclamada fica obrigada a pagar à Reclamante na primeira audiência a parte incontroversa das verbas rescisórias faltantes, sob pena de pagá-las acrescidas de 50%.'],

          ['nomePedido' => 'Intervalo Interjornada', 'tipo' => false, 'fundamento' => '14: - Como se nota, nas ocasiões em que a Reclamante dobrava a sua jornada, continuando das 06:00hs da manhã até as 14:00hs da tarde, além de não ser devidamente remunerado, era retirada a possibilidade de usufruir tempo imprescindível para repouso e recuperação da força.



          15: - Atenta a tal necessidade para que o obreiro possa descansar e estar com a família, medidas indispensáveis para sua qualidade de vida, a Consolidação das Leis do Trabalho determina em seu artigo 66 que deverá haver intervalo de 11 (onze) horas entre uma jornada e outra de trabalho.



          16: - Certo é que das 14:00hs, horário em que comumente encerrava sua jornada diária quando da obra, até as 22:00hs, horário em que novamente começava o trabalho, decorriam-se apenas 8 (oito) horas, em claro descumprimento, portanto, à determinação legal supramencionada.



          17: - Outrossim, a supressão do intervalo interjornada, em decorrência de sua gravidade a saúde e vida do trabalhador, gera os mesmos efeitos da supressão de intervalo intrajornada, qual seja, o pagamento do período relativo com adicional de 50%. Observe-se:



          HORAS EXTRAS. DESCUMPRIMENTO DO INTERVALO INTERJORNADA. -O desrespeito ao intervalo mínimo interjornadas previsto no art. 66 da CLT acarreta, por analogia, os mesmos efeitos previstos no § 4º do art. 71 da CLT e na Súmula nº 110 do TST, devendo-se pagar a integralidade das horas que foram subtraídas do intervalo, acrescidas do respectivo adicional-. Recurso de revista conhecido e provido. UNICIDADE CONTRATUAL. FRAUDE NA CONTRATAÇÃO TEMPORÁRIA. A divergência jurisprudencial não está estabelecida, uma vez

          que os paradigmas citados não revelam a necessária especificidade exigida pela Súmula nº 296, item I, do TST. Recurso de revista não conhecido. ADICIONAL DE INSALUBRIDADE. Não se constata contrariedade à Súmula nº 289 do TST, na medida em que o Regional consignou que foram fornecidos EPIs capazes de neutralizar o ruído acima do limite de tolerância e, ainda, que os níveis de ruído no local de trabalho do reclamante registraram valores dentro dos limites estabelecidos pela NR-15, Anexo 01, da Portaria nº 3.214/78. Recurso de revista não conhecido .

          (TST - RR: 1720 1720/2002-029-03-00.8, Relator: Vantuil Abdala, Data de Julgamento: 28/10/2009,  2ª Turma,, Data de Publicação: 20/11/2009)



          18: -  Cumpre informar que além de suprimidos, jamais lhe foram pagas pela Reclamada tais horas, portanto, deverão ser remuneradas ao RECLAMANTE em todo pacto laboral, na base de 3 (três) horas por dia de intervalo interjornada quando da dobra de jornada, devidamente acrescidas de adicional mínimo de 50% conforme, conforme dispõem os artigos 66 e art.71 §4º da CLT, por analogia.', 'resumo' => 'Pagamento  pelas horas de intervalo interjornada suprimidas, devidamente acrescidas de adicional mínimo de 50% conforme, conforme dispõem os artigos 66 e art.71 §4º da CLT, por analogia.'],

          ['nomePedido' => 'Acúmulo de Função', 'tipo' => false, 'fundamento' => '13: - A Reclamante era remunerada pela Reclamada para exercer a função de Auxiliar de Escritório, atividade para a qual foi contratada, e que deveria se limitar à organização do escritório. Assim dispõe sítio eletrônico especializado sobre:



          “O Auxiliar de Escritório é o profissional responsável por fazer as tarefas cotidianas de um escritório. Um Auxiliar de Escritório se encarrega de toda a parte burocrática da empresa para qual trabalha, documentando, arquivando e organizando todos os papéis referentes ao escritório.”

          (https://www.infojobs.com.br/artigos/Auxiliar_de_Escritorio__4005.aspx).



          14: - Ocorre que, conforme se nota pelos próprios holerites da Reclamante, ela também exercia funções atinentes ao departamento fiscal, em flagrante acúmulo de função, jamais sendo remunerada por ambas as atividades:



          “Por ser uma das áreas mais delicadas de uma empresa, é a contabilidade fiscal que registra os fatos do dia a dia, servindo como base para a apuração de impostos, atendimento entre as exigências fiscais e o controle das receitas e despesas da empresa.”

          (www.carvalhoramos.com.br/blog/o-que-faz-o-departamento-fiscal-e-tributario/).







          15: - Assim, sua carga de trabalho aumentou, porém não seu salário. Importante salientar que não se tratam, de forma alguma, de atividades abrangidas para o cargo para o qual foi contratada, uma vez que se exigem fazeres distintos, responsabilidades distintas, para cargos também completamente distintos.



          16: - Ato contínuo, embora tenha a obreira o dever de colaborar ao máximo com o empregador, prestando com zelo seu trabalho, não é razoável que dele se espere toda e qualquer atividade de que necessite o empregador, sem que haja justa contraprestação em retorno, conforme se depreende pela leitura do artigo 3º da CLT.



          17: - Com o acúmulo de funções exercidas pelo Reclamante, violou-se o equilíbrio próprio e devido em qualquer acordo, notoriamente o relativo a relações empregatícias, já que se deixou de observar a proporcionalidade entre obrigações recíprocas existentes entre as partes, excedendo-se a parte que cabia ao Reclamante.



          ACÚMULO DE FUNÇÕES. ACRÉSCIMO SALARIAL. O caráter sinalagmático e comutativo do contrato de trabalho, que impõe a observância de reciprocidade e equivalência das obrigações assumidas pelas partes, foi descaracterizado, não recebendo o empregado salário compatível com o trabalho executado, de forma a remunerar todas as atividades desenvolvidas.

          (TRT-1 - RO: 00109769820135010053 RJ, Relator: CELIO JUACABA CAVALCANTE, Data de Julgamento: 24/06/2015,  Décima Turma, Data de Publicação: 16/07/2015)



          18: - Ademais, o exercício de funções pela Reclamante em um número significativamente maior do que o previamente acordado quando da celebração do contrato, apontam, uma vez mais, para a ausência de boa-fé por parte da Reclamada durante a execução do acordo contratual, violando preceito do artigo 422 do Código Civil, já que passou a exigir do obreiro atividades muito superiores às previamente estabelecidas, abusando de seu poder de direção e da imprescindibilidade do trabalho ao Reclamante.



          19: - Assim, durante todo o pacto laboral, caracterizou-se o acúmulo de funções da Reclamante, e a violação das características básicas do contrato de trabalho, já que não remunerado justa e razoavelmente pelos serviços prestados, motivo pelo qual pleiteia-se que seja a Reclamada condenada a pagar plus salarial referente aos meses em que trabalhou com acúmulo de função, em valor mensal de 50% sobre o salário base do obreiro, bem a pagar os reflexos dele decorrentes, tais quais sobre horas extras, férias mais um terço, décimo terceiro, aviso prévio, depósito FGTS e multas.', 'resumo' => 'durante todo o pacto laboral, caracterizou-se o acúmulo de funções da Reclamante, e a violação das características básicas do contrato de trabalho, já que não remunerado justa e razoavelmente pelos serviços prestados, motivo pelo qual pleiteia-se que seja a Reclamada condenada a pagar plus salarial referente aos meses em que trabalhou com acúmulo de função, em valor mensal de 50% sobre o salário base do obreiro, bem a pagar os reflexos dele decorrentes, tais quais sobre horas extras, férias mais um terço, décimo terceiro, aviso prévio, depósito FGTS e multas.'],
        ];
        DB::table('pedidos')->insert($dados);
    }
}
