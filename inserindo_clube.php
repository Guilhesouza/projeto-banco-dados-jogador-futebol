<?php

include_once('conexao.php');

if(isset($_POST['nome_clube'])){
  $nome_clube = $_POST['nome_clube'];
}

$sql = "INSERT INTO clube (nome)
VALUES ('$nome_clube')";

if (mysqli_query($conn, $sql)) {
  echo "Novo Clube adicionado com sucesso!!!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>