<?php
include_once("../config/conexao.php");

if ($_POST) {
    
    $combo_categoria = $_POST["area"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = floatval($_POST["preco"]);

        $queryCodigo = "SELECT max(id) FROM tbl_lista_produtos";
//        $maxId = intval(mysqli_query($conexao, $queryCodigo)) + 1;

        $queryProduto = "INSERT INTO tbl_lista_produtos ( nome, descricao, preco, id_categoria) VALUES('$nome','$descricao', '$preco','$combo_categoria')";
        $inserirProduto = mysqli_query($conexao, $queryProduto);
}
 ?>