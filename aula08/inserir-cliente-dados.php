<?php
include_once("config/conexao.php");

if($_POST){
    //Variaveis
    $token_cliente = $_POST['id_client'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //Palavra chave - Email e senha
    $salt = md5($email.$senha);
    $custo = "06";
    $senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');
    $celuar = $_POST['celular'];
    //CONSULTA DE DADOS PARA BLOQUEIAO DE DUPLICIDADE DE EMAIL
    $queryConsultarEmail = "SELECT * FROM tbl_acessos WHERE usuario = '$email'";
    $resultadoEmail = mysqli_query($conexao, $queryConsultarEmail);
    $dadosEmail = mysqli_fetch_all($resultadoEmail, MYSQLI_ASSOC);

    if($dadosEmail){
        header("Location: completar-cadastro.php?client=$token_cliente&msg=email");
        exit;
    }
    
    //CONSULTAR DADOS DO CLIENTE ATRAVÉS DO TOKEN(HASH)
    $queryConsultaToken = "SELECT * FROM tbl_clientes WHERE `hash` = '$token_cliente'";

    $resultado = mysqli_query($conexao, $queryConsultaToken);
    $dados_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $id = $dados_cliente[0]["id_cliente"];

    $queryDocs = "INSERT INTO tbl_docs(id_usuario, documento, id_tipo_documento)
    VALUES('$id', '$cpf', 1), ('$id', '$rg', 2)";

    $inserirDocs = mysqli_query($conexao, $queryDocs);
    if($inserirDocs){
        $queryEmail = "INSERT INTO tbl_contatos_email(id_usuario, email)
        VALUES('$id', '$email')";

        $inserirEmail = mysqli_query($conexao, $queryEmail);

        if($inserirEmail){
            $queryTelefone = "INSERT INTO tbl_contatos(id_usuario, numero)
            VALUES('$id', '$celular')";

            $inserirTelefone = mysqli_query($conexao, $queryTelefone);
            if($inserirTelefone){
                $queryAcesso = "INSERT INTO tbl_acessos(id_usuario, usuario, senha, id_situacao) VALUES('$id', '$email', '$senhaSegura', 1)";
                $inserirAcesso = mysqli_query($conexao, $queryAcesso);
                
                if($inserirAcesso){
                    header("Location: index.php");
                } else { 
                    header("Location: completar-cadastro.php?client=".$token_cliente);
                }
            }else{
                header("Location: completar-cadastro.php?client=".$token_cliente);
            }
        }
    }

}else{
    header("Location: cadastro.php");
}