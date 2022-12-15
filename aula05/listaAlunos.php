<?php
include_once('dados-alunos.php');
//require_once('dados-alunos.php');

echo "<h2>Lista de alunos</h2>";

echo "<table>";
echo "<thead>";
        echo "<tr>";
           echo "<th>RA</th>";
           echo "<th>Nome completo</th>";
           echo "<th>Email</th>";
           echo "<th>Telefone</th>";
           echo "<th>Curso</th>";
           echo "<th>Ações</th>";
        echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($dados_alunos as $aluno) {
    echo "<tr>";
        echo "<td>".$aluno["ra"]."</td>";
        echo "<td>".$aluno["nome"]."</td>";
        echo "<td>".$aluno["email"]."</td>";
        echo "<td>".$aluno["telefone"]."</td>";
        echo "<td>".$aluno["curso"]."</td>";
        echo "<td><a href='verAluno.php?ra=".$aluno["ra"]."'>Ver dados</a></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";