<?php
include_once('dados-colaboradores.php');

echo "<h2>Lista de funcionários</h2>";

echo "<table>";
echo "<thead>";
        echo "<tr>";
           echo "<th>RE</th>";
           echo "<th>Nome completo</th>";
           echo "<th>Telefone</th>";
           echo "<th>Email</th>";
           echo "<th>Função</th>";
           echo "<th>Salário</th>";
           echo "<th>Data de admissão</th>";
        echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($dados_colaboradores as $colaboradores) {
    echo "<tr>";
        echo "<td>".$colaboradores["re"]."</td>";
        echo "<td>".$colaboradores["nome"]."</td>";
        echo "<td>".$colaboradores["email"]."</td>";
        echo "<td>".$colaboradores["telefone"]."</td>";
        echo "<td>".$colaboradores["funcao"]."</td>";
        echo "<td>".$colaboradores["salario_base"]."</td>";
        echo "<td>".$colaboradores["data_admissao"]."</td>";
        echo "<td><a href='verPagamento.php?re=".$colaboradores["re"]."'>Ver dados</a></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";