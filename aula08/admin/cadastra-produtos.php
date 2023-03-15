<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Lista de Produtos </title>
</head>
<body>

<form action="inserir-produto.php" class="form" method="POST">
 

<br>
<label>Nome:</label>
<input type="text" class="coluna" name="nome">

<br>

<label>Descrição</label>
<input type="text" class="coluna" name="descricao">

<br>

<label>Preço</label>
<input type="text" class="coluna" name="preco">

<br><select name="area" id="area">    
    <option value="" selected = selected>Selecione uma categoria</option>
    

    <?php
    $queryConsultCat = "SELECT * FROM tbl_categorias";
    $consulta = mysqli_query($conexao, $queryConsultCat);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach($resultado as $categoria){
     echo "<option value='".$categoria['id']."'>".$categoria['nome']."</option>";
    }
    ?>
</select>
<br>
<input type="submit" type="submit" value="Cadastrar">
</form>