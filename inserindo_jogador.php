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
    include_once('conexao.php');
    $nome = $_POST["nome"];
    $id_clube = $_POST["id_clube"];
    $salario = $_POST["salario"];
    $id_posicao = $_POST["id_posicao"];
    $data_nascimento = $_POST["data_nascimento"];

    $sql = "INSERT INTO jogador (nome, id_clube, salario, id_posicao, data_nascimento)
    VALUES ('" . $nome . "', '". $id_clube . "', '". $salario . "', '". $id_posicao . "', '". $data_nascimento . "')";

    if ($conn->query($sql) === TRUE) {
    echo "Novo Jogador criado com sucesso!!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>
</html>