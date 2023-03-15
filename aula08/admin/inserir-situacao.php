<?php
include_once("../config/conexao.php");

$tipo_situacao = $_POST["situacao"];

$query = "INSERT INTO tbl_situacao(situacao) VALUES('$tipo_situacao')";

$inserir_situacao = mysqli_query($conexao, $query);

if($inserir_situacao){
    echo "Situação efetuado com sucesso,
    <a href='index.php'>VOLTAR</a>";
}else{
    echo "Erro ao cadastrar situação,
    <a href='index.php'>VOLTAR</a>";
}