<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 02</title>
</head>

<body>

    <?php
    //Variável do tipo String (Caracter)
    $nome = "Heitor";
    $produto = "Arroz";
    //Variável - int (Inteiro)
    $idade = 18;
    $quantidade = 2;
    //Variável - float (Reais)
    $preco = 21.90;

    echo "<h2>Olá, $nome</h2>";
    echo "<h2>Idade: $idade</h2>";
    print_r ("O indivíduo $nome, doou $quantidade sacos de $produto para uma instituição de caridade no valor de $preco");
?>

</body>

</html>