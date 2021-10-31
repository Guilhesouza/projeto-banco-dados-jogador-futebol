<?php

include_once('conexao.php');

if(isset($_POST['nome_posicao'])){
  $nome_posicao = $_POST['nome_posicao'];
}

$sql = "INSERT INTO posicao (nome)
VALUES ('$nome_posicao')";

if (mysqli_query($conn, $sql)) {
  echo "Nova Posição adicionado com sucesso!!!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>