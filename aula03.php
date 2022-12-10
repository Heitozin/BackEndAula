<?php 

//Variáveis: String | Int | Float
//Variáveis: Arrays(Vetores)

$listaNomes = array('Thiago', 'Heitor', 'Maicon');

var_dump($listaNomes);

//Percorrer e mostrar os nomes presentes no array
foreach ($listaNomes as $nomes) {
    echo "<p>$nomes</p>";
}

//Estrutura: For
echo "<ul>";
for($posicao = 0; $posicao <count($listaNomes); $posicao++){
echo "<li>$listaNomes[$posicao]</li>";
}
echo "</ul>";

//Estrutura: while(){}
$pos  = 0;
echo "<ol>";
while ($pos < count($listaNomes)) {
echo "<li>$listaNomes[$pos]</li>";
$pos++;
}
echo "</ol>";

//Condicionais: if(){}else{}
$idade = 17;
if ($idade >= 18){
echo "<p>Você terá que trabalhar huahuhauha se fodeo</p>";
}else {
    echo "<p>Estuda pra ganhar mais pelo menos</p>";
}

$media = 7;
if ($media < 5){
echo "<h5>Aluno em recuperação</h5>";
}elseif ($media >=5 && $media < 7){
echo "<h5>Aluno passará pelo conselho";
}else {
echo "<h5>Aluno está aprovado!</h5>";
}

/**
 * Se o aluno tiver uma frequência menor que 75%, a reprovação será automática.
 * Se a frequência for igual ou maior que 75%, o aluno precisará ter média maior que 7 para aprovação.
 * Caso a média for entre 5 e 7, o aluno deverá passar por conselho.
 * Qualquer média menor que 5, o aluno estará reprovado.
 */


 $media = 5;
 $frequencia = 75;
 
 if ($frequencia >= 75){
     //Verificação da média
     if ($media < 5){
         echo "<p>Aluno reprovado, porém frequência é de $frequencia</p>";
     }elseif ($media >= 5 && $media < 7){
         echo "<p>Aluno passará por conselho, porém a frequência é de $frequencia</p>";
     }else {
         echo "Você está aprovado, e sua frequência é de $frequencia";
     }
 }

 $mercadorias = [
     [100, 'Arroz', 21.90],
     [101, 'Feijão', 7.90],
 ];

 echo "<h4>Percorrendo arrays de matriz com ForEach</h4>";

 foreach ($mercadorias as $produtos) {
     echo "<p>Código: $produtos[0]</p>";
     echo "<p>Produto: $produtos[1]</p>";
     echo "<p>Preço: $produtos[2]";
 }

 echo "<h4>Percorrendo arrays de matriz com for</h4>";
 for ($i = 0; $i < count($mercadorias); $i++){
      echo "<p>Código".$mercadorias[$i][0]."</p>";
 }