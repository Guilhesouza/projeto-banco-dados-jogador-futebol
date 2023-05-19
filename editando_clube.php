<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    // o include_once serve para trazer todo o código que está na conexao.php e trazer para a tela em questão
    // $_POST serve para pegar a informação que o usuário digitou na pasta de editar_clube.php

    include "conexao.php";
    $clube = $_POST["nome_clube"];
    $id = $_POST["id_clube"];

    // construindo o comando de editar na tabela clube com o valor que será a variável que o usuário informar no nome do clube

    $sql = "UPDATE clube SET nome =  '" . $clube . "' WHERE id=" . $id;

    // caso seja executado com sucesso, aparecerá a mensagem abaixo, caso contrário apresentará erro
    // query serve para executar o comando do banco de dados

    if ($conn->query($sql) === TRUE) {
    echo "Novo registro alterado com sucesso!!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>
</html>