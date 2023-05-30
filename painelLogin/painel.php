<?php
//Iniciar a sessão
session_start();

//Verificar se o usuário está autenticado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: cadastro.php');
    exit;
}

//Conectar ao banco de dados
$host = 'localhost';
$bancoDeDados = '';
$usuario = '';
$senha = '';

try {
    $pdo = new PDO("mysql: host=$host; dbname=$bancoDeDados; charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar: ' . $e->getMessage());
}

//Obter todos os usuários do banco de dados
$query = "SELECT * FROM usuarios";
$declaracao = $pdo->prepare($query);
$declaracao->execute();
$usuarios = $declaracao->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Usuários</title>
</head>
<body>
    <h1>Painel de Usuários</h1>

    <a href="logout.php">Sair</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['name']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                    <a href="deletar.php?id=<?php echo $usuario['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
