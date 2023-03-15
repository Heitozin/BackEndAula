<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Gêneros</title>
</head>
<body>
    <a href="index.php">VOLTAR</a>

    <h4>Gestão de gêneros</h4>
    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Gênero cadastrado com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar gênero";
        }
    }
    ?>


    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Gênero</th>
                <th>Ações</th>
                
            </tr>
        </thead>
        <tbody>


    <?php
    $queryGenero = "SELECT * FROM tbl_generos";
    $consulta = mysqli_query($conexao, $queryGenero);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    foreach($resultado as $genero) {
    echo "<tr>
        <td>".$genero["id"]."</td>
        <td>".$genero["genero"]."</td>
        <td>
        <a href='?acao=editar&id=".$genero["id"]."'>Editar</a>
        <a href='deletar-genero.php?id=".$genero["id"]."'>Deletar</a>
        </td>
        </tr>";
        
    }
    ?>
    </tbody>
</table>


    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarGenero = "SELECT * FROM tbl_generos WHERE id = ".$_GET["id"];
            $consultarGenero = mysqli_query($conexao, $queryConsultarGenero);
            $resultado = mysqli_fetch_all($consultarGenero, MYSQLI_ASSOC);
            foreach($resultado as $genero){
            echo '<h4>Editar gêneros</h4>
            <form action="editar-genero.php" method="POST">
                <input type="hidden" name="id" value="'.$genero["id"].'">
                <input type="text" name="genero" value="'.$genero["genero"].'">
                <button>Salvar</button>
            </form>';
            }
        }
        
    }else{
        echo '<h4>Cadastro de gêneros</h4>
        <form action="inserir-genero.php" method="POST">
            <input type="text" name="genero" placeholder="Gênero">
            <button>Gravar</button>
        </form>';
    }
    ?>

</body>
</html>