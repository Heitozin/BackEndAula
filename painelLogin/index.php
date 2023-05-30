<?php 
    include("conexao.php"); 


    if(isset($_POST["email"]) || isset($_POST["password"])) {
        if(strlen($_POST["email"]) == 0) {
            echo "Preencha seu email";
        } else if(strlen($_POST['password']) == 0) {
            echo "Preencha sua senha";
        } else {
            $email = $conection->real_escape_string($_POST["email"]);
            $password = $conection->real_escape_string($_POST["password"]);

            $query = $conection->query("SELECT * FROM tbl_users WHERE email='$email' AND `password`='$password'") or die("Falha na execução". $mysqli->error);
            $qnt = $query->num_rows;

            if($qnt == 1) {
                $user = $query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION["id"] = $user["id"];
                $_SESSION["nome"] = $user['nome'];

                header("Location: painel.php");
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="./">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">

        <button>Entrar</button>
    </form>
    
</body>
</html>