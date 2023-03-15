<?php
include_once("config/conexao.php");

$razao_social = $_POST["razao-social"];
$nome_fantasia = $_POST["nome-fantasia"];
$inscricao_estadual = $_POST["inscricao-estadual"];
$inscricao_municipal = $_POST["inscricao-municipal"];
$query = "INSERT INTO tbl_parceiros(razao_social, nome_fantasia, ie, im) VALUES('$razao_social', '$nome_fantasia', '$inscricao_estadual', '$inscricao_municipal')";
$inserir_parceiros = mysqli_query($conexao, $query);
$salt = md5($razao_social.$nome_fantasia.$inscricao_estadual.$inscricao_municipal);
$custo = "06";
$senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');


$cnpj = $_POST["cnpj"];
$query = "INSERT INTO tbl_docs(cnpj) VALUES ('$id_tipo_documento')";
$inserir_parceiros = mysqli_query($conexao, $query);
$salt = md5($cnpj);
$custo = "06";
$senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');


$email = $_POST["email"];
$query = "INSERT INTO tbl_clientes(email) VALUES ('$email')";
$inserir_parceiros = mysqli_query($conexao, $query);
$salt = md5($email);
$custo = "06";
$senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');


$telefone = $_POST["telefone"];
$query = "INSERT INTO tbl_contatos(numero) VALUES ('$telefone')";
$inserir_parceiros = mysqli_query($conexao, $query);
$salt = md5($telefone);
$custo = "06";
$senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');


$cep = $_POST["cep"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$query = "INSERT INTO tbl_endereco(endereco, cep, numero, cidade, uf) VALUES ('$logradouro', '$cep', '$numero', '$cidade', '$uf')";
$inserir_parceiros = mysqli_query($conexao, $query);
$salt = md5($logradouro.$cep.$numero.$cidade.$uf);
$custo = "06";
$senhaSegura = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');
$logradouro = $_POST["endereco"];

if($inserir_parceiros){
    header("Location: cadastra-parceiros.php?msg=Sucesso ao cadastrar");
}else{
 header("Location: cadastra-parceiros.php?msg=errocad");
}

