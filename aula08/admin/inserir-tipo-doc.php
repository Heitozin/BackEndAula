<?php
include_once("../config/conexao.php");

$tipo_documento = $_POST["tipo_doc"];

$query = "INSERT INTO tbl_tipo_docs(tipo_doc) VALUES('$tipo_documento')";

$tipo_documento = mysqli_query($conexao, $query);

if($tipo_documento){
    echo "Documentos cadastrados com sucesso,
    <a href='index.php'>VOLTAR</a>";
}else{
    echo "Erro ao cadastrar documento,
    <a href='index.php'>VOLTAR</a>";
}