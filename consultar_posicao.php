<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Posição</title>
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

  // o include vai trazer os dados que estão dentro de conecao.php para dentro de consultar_posicao.php
  include_once('conexao.php');

  // na linha 23 está sendo preparado o comando de consultar
  
  $sql = "SELECT * FROM posicao";

  // na linha 27 o query está executando o comando da linha 23 dentro do banco de dados e pegando o resultado e armazenando na variável $resultado
  
  $resultado = mysqli_query($conn, $sql);

  ?>

  <!--
      abaixo está sendo demonstrado a tabela
      align é alinhar os dados da linha ao centro e o colspan="2" vai ocupar o número que foi apresentado que neste caso é 2 na tabela
    -->

  <table>
    <tr>
      <td align="center" class="Caixa3">ID</td>
      <td align="center" class="Caixa3">Nome</td>
      <td align="center" colspan="2" class="Caixa3">Ação</td>
    </tr>

    <?php

    // na linha 47 está buscando o número de linhas do resultado da consulta e verificando se é maior que 0 
    
    if (mysqli_num_rows($resultado) > 0) {
      // na linha 50 está sendo buscado a informação na matriz $resultado e armazenando em $row
    
      while ($row = mysqli_fetch_assoc($resultado)) {
        ?>

        <!--
    caso a linha 47 seja verdadeira ele irá executar a tabela abaixo      
-->
        <tr>
          <td class="Caixa4">
            <?php echo $row["id"]; ?>
          </td>
          <td class="Caixa4">
            <?php echo $row["nome"]; ?>
          </td>
          <td> <a href="editar_posicao.php?id=<?php echo $row["id"]; ?>" class="Botao2">Editar</a></td>
          <td> <a href="deletar_posicao.php?id=<?php echo $row["id"]; ?>" class="Botao2">Deletar</a></td>
        </tr>

        <?php
      }
    }

    ?>


  </table>

</body>

</html>