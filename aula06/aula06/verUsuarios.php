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

include_once('dados-usuarios.php');

echo "<h2>Lista de usuários</h2>";

echo "<table>";
echo "<thead>";
        echo "<tr>";
           echo "<th>ID</th>";
           echo "<th>FIRST NAME</th>";
           echo "<th>LAST NAME</th>";
           echo "<th>AGE</th>";
           echo "<th>EMAIL</th>";
           echo "<th>PHONE</th>";
        echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($dados_usuarios as $usuario) {
    echo "<tr>";
    echo "<td>".$usuario["id"]."</td>";
    echo "<td>".$usuario["firstName"]."</td>";
    echo "<td>".$usuario["lastName"]."</td>";
    echo "<td>".$usuario["age"]."</td>";
    echo "<td>".$usuario["email"]."</td>";
    echo "<td>".$usuario["phone"]."</td>";
    echo "<td><a href='verCarrinho.php?id=".$usuario["id"]."'>Ver dados</a></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "<td><a href='verProduto.php?id=".$usuario["id"]."'>Ver vitrine de produtos</a></td>";