<?php include_once("config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro</title>
</head>
<body>
    <div id="pai">
        <div id="form_cliente">
            <form action="inserir-cliente.php" method="post">
                <input type="text" name="nome_cliente" placeholder="Nome">
                <input type="text" name="sobrenome_cliente" placeholder="Sobrenome">
                <input type="date" name="data_nasc">
                <label for="genero">Gênero</label>

                <select name="genero">
                    <?php
                    $query = "SELECT * FROM tbl_generos";
                    $consultaGenero = mysqli_query($conexao, $query);
                    $result = mysqli_fetch_all($consultaGenero, MYSQLI_ASSOC);

                    foreach($result as $genero){
                    ?>
                    <option value="<?=$genero["genero"]?>">
                <?=$genero["genero"]?>
                </option>
                <?php
                    }
                ?>

                </select>
                <div id="newsletter">
                    <input type="checkbox" name="newsletter">
                    <label for="newsletter">Deseja receber emails promocionais?</label>
                </div>
                </div>

                <button>Submeter</button>
                </div>
            </form>
</body>
</html>