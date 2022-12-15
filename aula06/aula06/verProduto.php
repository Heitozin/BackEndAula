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


 include_once('dados-produtos.php');

 $id = @$_GET['id'];

foreach ($dados_produtos as $usuario) {
    if ($usuario["id"] == $id) {
        echo "<h2>Vitrine de produtos</h2>";
        echo "<p>ID: ".$usuario["id"]."</p>";
        echo "<p>TITLE: ".$usuario["title"]."</p>";
        echo "<p>PRICE: ".$usuario["price"]."</p>";
        echo "<p>DISCOUNT PERCENTAGE: ".$usuario["discountPercentage"]."</p>";
        echo "<p>RATING: ".$usuario["rating"]."</p>";
        echo "<p>BRAND: ".$usuario["brand"]."</p>";
        echo "<p>CATEGORY: ".$usuario["category"]."</p>";
        echo "<p><a href='verUsuarios.php'>Voltar</a></p>";
    }
}