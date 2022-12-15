<?php
include_once("dados-alunos.php");

$ra = @$_GET['ra'];

foreach ($dados_alunos as $aluno) {
    if ($aluno["ra"] == $ra) {
        echo "<h2>Dados dos alunos</h2>";
        echo "<p>RA: ".$aluno["ra"]."</p>";
        echo "<p>Nome completo: ".$aluno["nome"]."</p>";
        echo "<p>Telefone: ".$aluno["email"]."</p>";
        echo "<p>Email: ".$aluno["email"]."</p>";
        echo "<p>Nível ensino: ".$aluno["tipo_ensino"]."</p>";
        echo "<p>Curso: ".$aluno["curso"]."</p>";
        echo "<p><a href='listaAlunos.php'>Voltar</a></p>";
    }
}