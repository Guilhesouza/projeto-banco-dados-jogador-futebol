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

    include "conexao.php";
    $nome = $_POST["nome"];
    $id_clube = $_POST["id_clube"];
    $salario = $_POST["salario"];
    $id_posicao = $_POST["id_posicao"];
    $data_nascimento = $_POST["data_nascimento"];
    $id = $_POST["id_jogador"];

    $sql = "UPDATE jogador SET nome =  '" . $nome . "', id_clube = '" . $id_clube . "', 
    salario = '" . $salario . "', id_posicao = '" . $id_posicao . "', 
    data_nascimento = '" . $data_nascimento . "' WHERE id=" . $id;

    if ($conn->query($sql) === TRUE) {
    echo "Novo Jogador alterado com sucesso!!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>


    
</body>
</html>