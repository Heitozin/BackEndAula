<?php
/**Faça um algoritmo para ler: a descrição do produto (nome), a quantidade adquirida e o preço unitário.
 * Calcular e escrever o total (total = quantidade adquirida * preço unitário),
 * o desconto e o total a pagar (total a pagar = total - desconto), 
 * sabendo-se que:
 * - Se quantidade <= 5 o desconto será de 2% - Se quantidade > 5 e quantidade <=10 
 * o desconto será de 3% - Se quantidade > 10 o desconto será de 5% 
 */

 $produto = "Arroz";
 $quantidade = 14;
 $preco = 22.90;
 $total;
 $desconto;

 echo "$produto, $quantidade, $preco";
 
 $total = ($quantidade * $preco);
 echo "<p>Total da compra: $total</p>";

 if($quantidade <= 5){
    $desconto = $total - $total * 2 / 100;
    echo "O valor total com os descontos é de: $desconto";
 }else if($quantidade > 5 && $quantidade <= 10){
    $desconto = $total - $total * 3 / 100;
    echo "O valor total com os descontos é de: $desconto";
 }else if($quantidade > 10){
    $desconto = $total - $total * 5 / 100;
    echo "O valor total com os descontos é de: $desconto";
 }