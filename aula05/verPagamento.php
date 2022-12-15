<?php
include_once('dados-colaboradores.php');

$re = @$_GET['re'];
// $salario = @$_GET['salario'];

foreach ($dados_colaboradores as $colaboradores) {
    if ($colaboradores['re'] == $re) {
        echo "<h2>Folha de dos funcionários</h2>";
        echo "<p>RE: ".$colaboradores['re']."</p>";
    }
}

foreach ($dados_colaboradores as $colaboradores) {
    if ($colaboradores["re"] == $re) {
        echo "<p>Nome funcionário: ".$colaboradores["nome"]."</p>";

        echo "<p>Salário bruto: ".$colaboradores['salario_base']."</p>";
        
        
        if ($colaboradores['salario_base'] <= 1212) {
            echo "<p>Salário com desconto do INSS: ".$colaboradores['salario_base'] - ($colaboradores['salario_base'] * (7.5 / 100))."</p>";
        } else if ($colaboradores['salario_base'] > 1212 && $colaboradores['salario_base'] <= 2427.35){
            echo "<p>Salário com desconto do INSS: ".$colaboradores['salario_base'] - ($colaboradores['salario_base'] * (9 / 100))."</p>";
        }else if($colaboradores['salario_base'] > 2427.35 && $colaboradores['salario_base'] <= 3641.03){
            echo "<p>Salário com desconto do INSS: ".$colaboradores['salario_base'] - ($colaboradores['salario_base'] * (12 / 100))."</p>";
        }else if($colaboradores['salario_base'] > 3641.03){
            echo "<p>Salário com desconto do INSS: ".$colaboradores['salario_base'] - ($colaboradores['salario_base'] * (14 / 100))."</p>";
        }
        
        echo "<p>Salário com desconto do VT: ".$colaboradores['salario_base'] - ($colaboradores['salario_base'] * (6 / 100))."</p>";
        
        echo "<p>Salário com desconto do VR: ".$colaboradores['salario_base'] - 120 ."</p>";

        echo "<p><a href='listaFuncionarios.php'>Voltar</a></p>";
    }
}



/**
 *          TABELA INSS
 * ATÉ   1212                 7,5%
 * DE    1212    ATÉ 2427.35    9%
 * DE    2427.35 ATÉ 3641.03   12%
 * ACIMA 3641.03               14%
*/

/**
 *       TABELA VT
 * 6% SOBE SALÁRIO BRUTO
*/

/**
 *       TABELA VR
 * 120 REAIS FIXO
*/