<?php include_once("config/conexao.php")?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento do cliente</title>
    <style>
        body{
            color: blue
        }

        .pai{
            border: 1px solid

        }
    </style>
</head>

<body>
    <div class="pai">
    <h2>Cadastre-se</h2>

    <div class="filho">
    <form action="inserir-cliente.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome">
        <br><br>
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" id="data_nasc" name="data_nasc">
        <br><br>

        <select name="genero">
        <?php $query = "SELECT * FROM tbl_generos";
        $consulta_genero = mysqli_query($conexao, $query);
        $result = mysqli_fetch_all($consulta_genero, MYSQLI_ASSOC);

        foreach($result as $genero){
        ?>
        <option value="<?=$genero["id"]?>"><?=$genero["genero"]?></option>
        <?php
    }
    ?>
    </select>
        <br><br>
        <input type="checkbox" id="notificacao_email" name="notificacao_email">
        <label for="notificacao_email">Desejo receber informações por email</label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    </div>
</div>


</body>

</html>