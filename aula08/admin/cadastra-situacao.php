<?php include_once("../config/conexao.php")?>;
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de situação</title>
</head>
<body>
    <a href="index.php">VOLTAR</a>

    <h4>Gestão de situação</h4>

    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Situação cadastrada com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar situação";
        }
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Situações</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $querySituacao = "SELECT * FROM tbl_situacao";
    $consulta = mysqli_query($conexao, $querySituacao);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    foreach($resultado as $situacao) {
    echo "<tr>
        <td>".$situacao["id"]."</td>
        <td>".$situacao["situacao"]."</td>
        <a href='?acao=editar&id=".$situacao["id"]."'>Editar</a>
        <a href='deletar-situacao.php?id=".$situacao["id"]."'>Deletar</a>
        </td>
        </tr>";
        
    }
    ?>
    </tbody>
</table>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarSituacao = "SELECT * FROM tbl_situacao WHERE id = ".$_GET["id"];
            $consultarSituacao = mysqli_query($conexao, $queryConsultarSituacao);
            $resultado = mysqli_fetch_all($consultarSituacao, MYSQLI_ASSOC);
            foreach($resultado as $situacao){
            echo '<h4>Editar situação</h4>
            <form action="editar-situacao.php" method="POST">
                <input type="hidden" name="id" value="'.$situacao["id"].'">
                <input type="text" name="situacao" value="'.$situacao["situacao"].'">
                <button>Salvar</button>
            </form>';
            }
            

        }
    }else{
        echo '<h4>Cadastro de situações</h4>
        <form action="inserir-situacao.php" method="POST">
            <input type="text" name="situacao" placeholder="Situação">
            <button>Gravar</button>
        </form>';
    }
    ?>
</body>
</html>