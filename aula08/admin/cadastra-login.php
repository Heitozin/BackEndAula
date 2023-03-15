<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market | Login</title>
</head>

<body>
    <a href="index.php">VOLTAR</a>

    <h4>Gestão de gêneros</h4>
    <?php
if(isset($_GET["msg"])){
    if($_GET["msg"] == "sucessocad"){
        echo "Login cadastrado com sucesso";
    }
    if($_GET["msg"] == "errocad"){
        echo "Erro ao cadastrar login";
    }
}
?>


    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuário</th>
                <th>Senha</th>

            </tr>
        </thead>
        <tbody>


            <?php
$queryAcessos = "SELECT * FROM tbl_acessos";
$consulta = mysqli_query($conexao, $queryAcessos);
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
foreach($resultado as $acesso) {
echo "<tr>
    <td>".$acesso["id"]."</td>
    <td>".$acesso["usuario"]."</td>
    <td>".$acesso["senha"]."</td>
    <td>
    <a href='?acao=editar&id=".$acesso["id"]."'>Editar</a>
    <a href='deletar-login.php?id=".$acesso["id"]."'>Deletar</a>
    </td>
    </tr>";
    
}
?>
        </tbody>
    </table>


    <?php
if(isset($_GET["acao"])){
    if($_GET["acao"] == "editar"){
        $queryConsultarAcesso = "SELECT * FROM tbl_acessos WHERE id = ".$_GET["id"];
        $consultarAcessos = mysqli_query($conexao, $queryConsultarAcesso);
        $resultado = mysqli_fetch_all($consultarAcessos, MYSQLI_ASSOC);
        foreach($resultado as $acesso){
        echo '<h4>Editar login</h4>
        <form action="editar-login.php" method="POST">
            <input type="hidden" name="id" value="'.$acesso["id"].'">
            <input type="text" name="usuario" value="'.$acesso["usuario"].'">
            <button>Salvar</button>
        </form>';
        }
    }
    
}
   
?>

</html>