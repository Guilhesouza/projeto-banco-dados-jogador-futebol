<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogador</title>
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

  include_once('conexao.php');

  $sql = 'SELECT jogador.id, jogador.nome, 
clube.nome as clube, jogador.salario, 
posicao.nome as posicao, jogador.data_nascimento
FROM jogador
INNER JOIN clube
ON jogador.id_clube = clube.id
INNER JOIN posicao
ON jogador.id_posicao = posicao.id';

  $resultado = mysqli_query($conn, $sql);

  ?>


  <table>
    <tr>
      <td align="center" class="Caixa3">ID</td>
      <td align="center" class="Caixa3">Nome</td>
      <td align="center" class="Caixa3">Clube</td>
      <td align="center" class="Caixa3">Salário</td>
      <td align="center" class="Caixa3">Posição</td>
      <td align="center" class="Caixa3">Data de Nascimento</td>
      <td align="center" colspan="2" class="Caixa3">Ação</td>
    </tr>

    <?php

    if (mysqli_num_rows($resultado) > 0) {

      while ($row = mysqli_fetch_assoc($resultado)) {
        ?>

        <tr>

          <td class="Caixa4">
            <?php echo $row["id"]; ?>
          </td>
          <td class="Caixa4">
            <?php echo $row["nome"]; ?>
          </td>
          <td class="Caixa4">
            <?php echo $row["clube"]; ?>
          </td>
          <td class="Caixa4">
            <?php echo $row["salario"]; ?>
          </td>
          <td class="Caixa4">
            <?php echo $row["posicao"]; ?>
          </td>
          <td class="Caixa4" align="center">
            <?php echo $row["data_nascimento"] ?>
          </td>
          <td> <a href="editar_jogador.php?id=<?php echo $row["id"]; ?>" class="Botao2"> Editar</a></td>
          <td> <a href="deletar_jogador.php?id=<?php echo $row["id"]; ?>" class="Botao2"> Deletar</a></td>
        </tr>

        <?php

      }
    }

    ?>

  </table>

</body>

</html>