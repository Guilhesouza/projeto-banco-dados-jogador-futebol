<head>
  <title>Inserindo Clube</title>
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

  // o include_once serve para trazer todo o código que está na conexao.php e trazer para a tela em questão
  include_once('conexao.php');

  // isset é para verificar se essa variável tem um valor válido
// $_POST serve para pegar a informação que o usuário digitou na pasta de inserir_clube.php
  
  if (isset($_POST['nome_clube'])) {
    $nome_clube = $_POST['nome_clube'];
  }

  // construindo o comando de inserir na tabela clube com o valor que será a variável que o usuário informar no nome do clube
  
  $sql = "INSERT INTO clube (nome)
VALUES ('$nome_clube')";

  // caso seja executado com sucesso, aparecerá a mensagem abaixo, caso contrário apresentará erro
// query serve para executar o comando do banco de dados
  
  if (mysqli_query($conn, $sql)) {
    echo "<p class='Caixa3'> Novo Clube adicionado com sucesso!!!</p>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

  ?>

</body>