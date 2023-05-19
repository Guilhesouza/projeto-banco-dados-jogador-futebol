<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--
  foi criado um formulário para o usuário preencher o valor do nome_clube
  e quando o usuário clicar no botão Enviar, que é do tipo "submit" ou seja irá executar a action do form
  que irá levar o usuário para a página "inserindo_clube.php"
    
-->

<form method="post" action="inserindo_clube.php">
    <input type="text" name="nome_clube">
    <input type="submit" value="Enviar">
</form>

</body>
</html>