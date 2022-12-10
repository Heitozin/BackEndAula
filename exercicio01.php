<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 01</title>
</head>

<body>
    <?php 
    echo "<style>
    table{
        border-collapse: collapse;
        width: 100%;

    }

    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid blue;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        justify-content: center;
    }

    tr:nth-child(even){
        background-color: cadetblue;
    }

    tr:hover{
        background-color: yellow;
    }
    </style>";


    $nome = "Heitor";
    $cpf = "758.522.691.58";
    $dataDeNascimento = "28/02/06";
    $genero = "Masculino";
    $celular = "(11)91220-8001";
    $email = "heitorlamarpeixoto@gmail.com";
    $cep = "02763-050";
    $endereco = "Rua Professor Mário Dápico";
    $numero = 315;
    $bairro = "Jardim Vila Nova Cachoeirinha";
    $cidade = "São Paulo";
    $estado = "São Paulo";

    echo "<table border = '5'>
    <tr>
    <th>NOME</th>
    <th>CPF</th>
    <th>DATA DE NASCIMENTO</th>
    <th>GÊNERO</th>
    <th>CELULAR</th>
    <th>EMAIL</th>
    <th>CEP</th>
    <th>ENDEREÇO</th>
    <th>NÚMERO</th>
    <th>BAIRRO</th>
    <th>CIDADE</th>
    <th>ESTADO</th>
    </tr>

    <tr>
    <th>$nome</th>
    <th>$cpf</th>
    <th>$dataDeNascimento</th>
    <th>$genero</th>
    <th>$celular</th>
    <th>$email</th>
    <th>$cep</th>
    <th>$endereco</th>
    <th>$numero</th>
    <th>$bairro</th>
    <th>$cidade</th>
    <th>$estado</th>
    </tr>
    </table>";
    ?>
</body>

</html>