<?php //Requisições GET ?>

<form method="GET">
    <h3>Requisições GET</h3>
    <label for="usuario">Usuário</label>
    <input type="text" name="usuario"></input>
    <label for="senha">Senha</label>
    <input type="password" name="senha"></input>
    <button>Acessar</button>
</form>

<?php
if (isset($_GET['usuario']) && isset($_GET['senha'])){
    echo $_GET['usuario'];
    echo $_GET['senha'];
}else {
    echo "Digite as informações no formulário";
}
?>

<?php //Requisições POST?>

<form method="POST">
    <h3>Requisições POST</h3>
    <label for="bim1">BIM 1</label>
    <input type="number" name = "bim1"></input>
    <br>
    <label for="bim2">BIM 2</label>
    <input type="number" name = "bim2"></input>
    <br>
    <label for="bim3">BIM 3</label>
    <input type="number" name = "bim3"></input>
    <br>
    <label for="bim4">BIM 4</label>
    <input type="number" name = "bim4"></input>
    <br>
    <button>Enviar dados</button>
</form>

<?php
var_dump(@$_POST);
echo "<p>B1:".@$_POST['bim1']."</p>";
echo "<p>B2:".@$_POST['bim2']."</p>";
echo "<p>B3:".@$_POST['bim3']."</p>";
echo "<p>B4:".@$_POST['bim4']."</p>";

echo $media = (@$_POST['bim1'] + @$_POST['bim2'] + @$_POST['bim3'] + @$_POST['bim4']) / 4;
?>