<head>
  <title>Deletar Jogador</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-image: url(imagens/clubes_futebol.png);
      background-size: cover;
      /* para ajustar a imagem ao tamanho do corpo */
      /* Outros estilos opcionais, como cor do texto, margens, etc. */
    }
  </style>
</head>

<body>
  <?php

  include "conexao.php";

  $id = $_GET["id"];
  $sql = "DELETE FROM jogador WHERE id = " . $id;
  if ($conn->query($sql) === TRUE) {
    echo "<p class='Caixa3'> Jogador Deletado com sucesso!!!</p>";
  } else {
    echo "<p class='Caixa3'> Erro ao deletar Jogador: </p>" . $conn->error;
  }
  ?>

</body>