<?php
//var_dump($_POST);

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($nome == ""){
    echo "<p>Preencha o campo nome</p> <a href = 'exercicioAula04.html'>Voltar</a>";
    
}else if ($sobrenome == ""){
    echo "<p>Preencha o campo sobrenome</p> <a href = 'exercicioAula04.html'>Voltar</a>";
}else if ($email == ""){
    echo "<p>Preencha o campo email</p> <a href = 'exercicioAula04.html'>Voltar</a>";
}elseif ($senha == ""){
    echo "<p>Preencha o campo senha</p> <a href = 'exercicioAula04.html'>Voltar</a>";
}else {
    echo "Seus dados foram recebidos com sucesso";
}
?>