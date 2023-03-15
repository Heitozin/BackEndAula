<?php
include_once("../config/conexao.php");

$cadastro_genero = $_POST["genero"];

$query = "INSERT INTO tbl_generos(genero) VALUES('$cadastro_genero')";

$cadastro_genero = mysqli_query($conexao, $query);

if($cadastro_genero){
    echo "Cadastro de gênero efetuado com sucesso,
    <a href='index.php'>VOLTAR</a>";
}else{
    echo "Erro ao cadastrar gênero,
    <a href='index.php'>VOLTAR</a>";
}