<?php 
    $name = $_POST["nome"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $login = $_POST["login"];
    $password = $_POST["senha"];
    $confirm = $_POST["confirmacao"];


    $email = str_replace(" ", "", $email);
    $email = str_replace("/", "", $email);
    $email = str_replace("@.", "", $email);
    $email = str_replace(".@", "", $email);
    $email = str_replace(",", "", $email);
    $email = str_replace(";", "", $email);
    $erro = 0;

    if(empty($name)) {
        $erro = 1;
        $msg = "Por favor, digite seu nome corretamente.";
    } else if (strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, "." == 0)) {
        $erro = 1;
        $msg = "Por favor, digite seu email corretamente.";
    } else if(strlen($estado) != 2) {
        $erro = 1;
        $msg = "Por favor, escolha seu estado.";
    } else if (strlen($login) < 5 || strlen($login)>15) {
        $erro = 1;
        $msg = "O nome de usuário deve ter entre 5 e 15 caracteres.";
    } else if (strstr($login, " ") != false) {
        $erro = 1;
        $msg = "O nome de usuário não pode conter espaço";
    } else if($password != $confirm) {}
    
    if($erro) {
        echo "<html><body>";
        echo "<p align=center>$msg</p>";
        echo "<p align=center><a href='javascript:history.back()'>Voltar</a></p>";
        echo "</body></html>";
    }else {
        echo "<html><body>";
        echo "<p align=center>Seu cadastro foi realizado com sucesso!</p>";
        echo "</body></html>";
    }
?>