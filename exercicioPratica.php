<?php
/** Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. 
 * Para estar em condições, um dos seguintes requisitos deve ser satisfeito:
 * - Ter no mínimo 65 anos de idade. - Ter trabalhado no mínimo 30 anos. - Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos. 
 * Com base nas informações acima, faça um algoritmo que leia: o número do empregado (código), o ano de seu nascimento e o ano de seu ingresso na empresa.
 *  O programa deverá escrever a idade e o tempo de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer' */

 $idade = 60;
 $tempo = 25;
 $nome = "Heitor";

 if ($idade >= 60 && $tempo >= 25) {
     print_r("O funcionário $nome precisa se aposentar, pois tem $idade anos de idade e $tempo anos de trabalho.");
 }else if ($idade >= 65) {
     print_r("O funcionário $nome precisa se aposentar, pois tem $idade anos de idade.");
 }else if ($tempo >= 30) {
     print_r("O funcionário $nome precisa se aposentar, pois tem $tempo anos de trabalho.");
 }else {
     print_r("Não requer aposentadoria.");
 }

 