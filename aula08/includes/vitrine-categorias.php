<?php
$query = "SELECT nome, slug, img FROM tbl_categorias";
$resultado = mysqli_query($conexao, $query);
$dados_categorias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

foreach($dados_categorias as $categoria){

    $myFile = fopen("newFile.html", "w"); //testa

    $txt = "<h2>Seja bem vindo</h2>";


    fwrite($myFile, $txt);
    fclose($myFile);
    $myFile = fopen($categoria["slug"].".html", "w"); //categoria

    echo "<h4>".$categoria["nome"]."</h4>";
    echo "<img src='".$categoria["img"]."'>";
}

//açougue
//bebidas
//doces
//horti-fruti
//padaria
//perfumaria
//produtos de limpeza
?>