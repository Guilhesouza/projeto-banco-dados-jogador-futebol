<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clubes de Futebol</title>
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

  // armazenando o comando dentro de uma variável e o tipo de dado é uma string
  
  $consultar = 'SELECT * FROM clube';

  // na linha 26 é solicitado a execução do comando no banco de dados mysqli
  
  $result = mysqli_query($conn, $consultar);

  ?>

  <table>
    <tr>
      <td align="center" class="Caixa3">ID</td>
      <td align="center" class="Caixa3">Nome</td>
      <td align="center" colspan="2" class="Caixa3">Ação</td>
    </tr>

    <?php
    // na linha abaixo está sendo verificado se o numero de linhas do resultado é maior que 0
    
    if (mysqli_num_rows($result) > 0) {

      // caso seja verdadeiro a linha abaixo é executada
      // ela está imprimindo os resultados de cada linha do banco de dados
      // $row é a linha do resultado
    
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr> 
                       <td class="Caixa4">' . $row["id"] . '</td>
                       <td class="Caixa4">' . $row["nome"] . '</td>
                       <td> <a href="editar_clube.php?id=' . $row["id"] . '" class="Botao2"> Editar</a> </td>
                       <td> <a href="deletar_clube.php?id=' . $row["id"] . '" class="Botao2"> Deletar</a> </td>
                    </tr>';
      }
    } else {
      echo "0 resultado";
    }
    ?>

  </table>

</body>

</html>