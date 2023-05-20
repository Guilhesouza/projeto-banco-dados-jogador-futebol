<head>
    <title>Editando Clube</title>
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
    // $_POST serve para pegar a informação que o usuário digitou na pasta de editar_clube.php
    
    include "conexao.php";
    $clube = $_POST["nome_clube"];
    $id = $_POST["id_clube"];

    // construindo o comando de editar na tabela clube com o valor que será a variável que o usuário informar no nome do clube
    
    $sql = "UPDATE clube SET nome =  '" . $clube . "' WHERE id=" . $id;

    // caso seja executado com sucesso, aparecerá a mensagem abaixo, caso contrário apresentará erro
    // query serve para executar o comando do banco de dados
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class='Caixa3'> Novo Registro alterado com sucesso!!!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>