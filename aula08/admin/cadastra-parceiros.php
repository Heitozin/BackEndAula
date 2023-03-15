<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de parceiros</title>
</head>
<body>
    <form action="inserir-parceiros.php" method="POST">
        <input type="text" name="razao-social" placeholder="Razão social">

        <input type="text" name="nome-fantasia" placeholder="Nome fantasia">

        <input type="number" name="inscricao-estadual" placeholder="Inscrição estadual">

        <input type="number" name="inscricao-municipal" placeholder="Inscrição municipal">

        <input type="number" name="cnpj" placeholder="CNPJ">

        <input type="text" name="email" placeholder="Email">

        <input type="number" name="telefone" placeholder="Telefone">

        <input type="text" name="endereco" placeholder="Endereço">

        <input type="number" name="cep" placeholder="CEP">

        <input type="number" name="numero" placeholder="Número">

        <input type="text" name="cidade" placeholder="Cidade">

        <input type="text" name="uf" placeholder="UF">

        <button>Enviar</button>

    </form>
</body>
</html>