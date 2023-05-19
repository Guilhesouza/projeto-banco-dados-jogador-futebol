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
$sql = "DELETE FROM clube WHERE id = " . $id;
if ($conn->query($sql) === TRUE) {
  echo "Clube deletado com sucesso !!!";
}
else {
  echo "Erro ao deletar o clube: " . $conn->error;
}


?>

</body>
</html>