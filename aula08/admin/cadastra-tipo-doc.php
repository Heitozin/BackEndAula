<?php include_once("../config/conexao.php")?>;
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de tipos de documento</title>
</head>
<body>
    <a href="index.php">VOLTAR</a>

    <h4>Gestão do tipo de documento</h4>

    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Tipo de documento cadastrado com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar tipo do documento";
        }
    }
    ?>

    <table>
        <thead>
            <th>Id</th>
            <th>Documento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
            $queryTipoDoc = "SELECT * FROM tbl_tipo_docs";
            $consulta = mysqli_query($conexao, $queryTipoDoc);
            $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
            foreach($resultado as $tipoDoc){
                echo "<tr>
                <td>".$tipoDoc["id"]."</td>
                <td>".$tipoDoc["tipo_doc"]."</td>
                <td>
                <a href='?acao=editar&id=".$tipoDoc["id"]."'>Editar</a>
                <a href='deletar-tipo-doc.php?id=".$tipoDoc["id"]."'>Deletar</a>
                </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarDoc = "SELECT * FROM tbl_tipo_docs WHERE id = ".$_GET["id"];
            $consultarDoc = mysqli_query($conexao, $queryConsultarDoc);
            $resultado = mysqli_fetch_all($consultarDoc, MYSQLI_ASSOC);
            foreach($resultado as $tipoDoc){
                echo '<h4>Editar documento</h4>
                <form action="editar-tipo-doc.php" method="POST">
                <input type="hidden" name="id" value="'.$tipoDoc["id"].'">
                <input type="text" name="tipo_doc" value="'.$tipoDoc["tipo_doc"].'">
                <button>Salvar</button>
                </form>';
            }

        }
    }else{
        echo '<h4>Cadastro do tipo de documento</h4>
        <form action="inserir-tipo-doc.php" method="POST">
        <input type="text" name="tipo_doc" placeholder="Situação">
        <button>Gravar</button>
        </form>';
    }
    ?>
</body>
</html>