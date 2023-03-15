<?php
include_once("../config/conexao.php");

$nome_categoria = $_POST["nome-categoria"];
$img_categoria = $_POST["img-categoria"];
$slug_categoria = $_POST["slug-categoria"];

$query = "INSERT INTO tbl_categorias(nome, img, slug) VALUES('$nome_categoria', '$img_categoria', '$slug_categoria')";

$inserir_categoria = mysqli_query($conexao, $query);

if($inserir_categoria){
    header("Location: cadastra-categoria.php?msg=Sucesso ao cadastrar categoria");
}else{
 header("Location: cadastra-categoria.php?msg=errocad");
}