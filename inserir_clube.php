<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Clube</title>
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

  <!--
  foi criado um formulário para o usuário preencher o valor do nome_clube
  e quando o usuário clicar no botão Enviar, que é do tipo "submit" ou seja irá executar a action do form
  que irá levar o usuário para a página "inserindo_clube.php"
    
-->

  <form method="post" action="inserindo_clube.php">
    <div class="row">
      <div class="column">
        <br>
        <table>
          <tr>
            <td class="Caixa3">Nome Clube</td>
            <td class="Caixa3"></td>
          </tr>
          <tr>
            <td><input type="text" class="Botao2" name="nome_clube"></td>
            <td><input type="submit" class="Botao2" value="Enviar"></td>
          </tr>
        </table>


  </form>

</body>

</html>