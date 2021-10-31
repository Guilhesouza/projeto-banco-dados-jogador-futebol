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
    $posicao = $_POST["nome_posicao"];
    $id = $_POST["id_posicao"];

    $sql = "UPDATE posicao SET nome =  '" . $posicao . "' WHERE id=" . $id;

    if ($conn->query($sql) === TRUE) {
    echo "Novo registro alterado com sucesso!!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>

</body>
</html>