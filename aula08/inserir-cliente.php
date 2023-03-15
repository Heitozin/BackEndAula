<?php

include_once("config/conexao.php");

if($_POST){

    //Variaveis
    $nome = $_POST["nome_cliente"];
    $sobrenome = $_POST["sobrenome_cliente"];
    $data_nascimento = $_POST["data_nasc"];
    $genero = $_POST["genero"];
    $newsletter = $_POST["newsletter"];
    $assina_boletim = 0;
    if($newsletter){
        $assina_boletim = 1;
    }
    //CRIAÇÃO DA HASH - DATA + NOME + SOBRENOME
    $token_cliente = sha1(md5(date('d/m/y').$nome.$sobrenome));

    echo $query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newsletter, id_situacao, `hash`) 
    VALUES('$nome', '$sobrenome', '$data_nasc', '$genero', '$assina_boletim', 1, '$token_cliente')";

    $inserir = mysqli_query($conexao, $query);

    if($inserir){
        $id_client = mysqli_insert_id($conexao);
        header('Location: completar-cadastro.php?client='.$token_cliente);
    }else{
        header("Location: cadastro.php");
    }

}else{
   header('Location: cliente-formulario.php');
}