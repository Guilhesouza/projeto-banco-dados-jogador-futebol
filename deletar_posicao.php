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

    $id = $_GET["id"];
    $sql = "DELETE FROM posicao WHERE id = " . $id;
    if ($conn->query($sql) === TRUE) {
        echo "Posição deletada com sucesso !!!";
      } else {
        echo "Erro ao deletar a posição: " . $conn->error;
      }
    
?>

</body>
</html>