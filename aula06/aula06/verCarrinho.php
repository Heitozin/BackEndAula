<?php
/**Com os dados de usuários (dados-usuarios.php),
 * gere uma lista de usuários e permita uma opção que possa verificar
 * se o usuário tem algum pedido, utilize o arquivo (dados-carrinho.php)
 * para executar esta verificação.
 * 
 * Com os dados produtos (dados-produtos.php), gere 
 * uma lista com as informações dos produtos e também
 * faça uma vitrine de produtos.
 */

 include_once('dados-carrinho.php');

 $id = @$_GET['id'];

 echo "<h2>Verificação de pedidos</h2>";
 
foreach ($dados_carrinho as $usuario) {
    if ($usuario["id"] == $id) {
        foreach($usuario['products'] as $produto){
        echo "<p>ID: ".$produto["id"]."</p>";
        echo "<p>TITLE: ".$produto['title']."</p>";
        echo "<p>PRICE: ".$produto["price"]."</p>";
        echo "<p>QUANTITY: ".$produto["quantity"]."</p>";
        echo "<p>TOTAL: ".$produto["total"]."</p>";
        echo "<p>DISCOUNT PERCENTAGE: ".$produto["discountPercentage"]."</p>";
        echo "<p>DISCOUNT PRICE: ".$produto["discountedPrice"]."</p>";
        echo "<p><a href='verUsuarios.php'>Voltar</a></p>";
    }
}
}