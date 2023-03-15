<?php include_once("../config/conexao.php")?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Gestão de Categorias</title>
</head>
<body>
    <a href="index.php">VOLTAR</a>
    <h4>Gestão de categorias</h4>
    <?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Categoria cadastrada com sucesso";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar categoria";
        }
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Visibilidade</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $queryConsultaCat = "SELECT * FROM tbl_categorias";
    $consulta = mysqli_query($conexao, $queryConsultaCat);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    foreach($resultado as $categoria) {
    echo "<tr>
        <td>".$categoria["nome"]."</td>
        <td>".$categoria["visibilidade"]."</td>
        <td>".$categoria["id_situacao"]."</td>
        <td>
        <a href='?acao=editar&id=".$categoria["id"]."'>Editar</a>
        <a href='deletar-categoria.php?id=".$categoria["id"]."'>Deletar</a>
        </td>
        </tr>";
        
    }
    ?>
    </tbody>
</table>

    <?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){
            $queryConsultarCategoria = "SELECT * FROM tbl_categorias WHERE id = ".$_GET["id"];
            $consultarCategoria = mysqli_query($conexao, $queryConsultarCategoria);
            $resultado = mysqli_fetch_all($consultarCategoria, MYSQLI_ASSOC);
            foreach($resultado as $categoria){
            echo '<h4>Editar categorias</h4>
            <form action="editar-categoria.php" method="POST">
                <input type="hidden" name="id" value="'.$categoria["id"].'">
                <input type="text" name="nome-categoria" value="'.$categoria["nome"].'">
                <input type="text" name="img-categoria" value="'.$categoria["img"].'">
                <input type="text" name="slug-categoria" values="'.$categoria["slug"].'">
                <button>Salvar</button>
            </form>';
            }
            

        }
    }else{
        echo '<h4>Cadastro de categorias</h4>
        <form action="inserir-categoria.php" method="POST">
            <input type="text" name="nome-categoria" placeholder="Nome da categoria">
            <input type="text" name="img-categoria" placeholder="Imagem da categoria">
            <input type="text" name="slug-categoria" placeholder="Slug da categoria">
            <button>Gravar</button>
        </form>';
    }
    ?>
</body>
</html>