<?php
include_once("../config/conexao.php");

if($_POST){
    $id = $_POST["id"];
    $genero = $_POST["genero"];

    $query = "UPDATE tbl_generos SET genero = '$genero' WHERE id = $id";
    $gravar = mysqli_query($conexao, $query);
    if($gravar){
        header("Location: cadastro-genero.php");
    }else{

    }
}else{
    header("Location: cadastro-genero.php");
}