<head>
    <title>Editando Jogador</title>
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
    $nome = $_POST["nome"];
    $id_clube = $_POST["id_clube"];
    $salario = $_POST["salario"];
    $id_posicao = $_POST["id_posicao"];
    $data_nascimento = $_POST["data_nascimento"];
    $id = $_POST["id_jogador"];

    $sql = "UPDATE jogador SET nome =  '" . $nome . "', id_clube = '" . $id_clube . "', 
    salario = '" . $salario . "', id_posicao = '" . $id_posicao . "', 
    data_nascimento = '" . $data_nascimento . "' WHERE id=" . $id;

    if ($conn->query($sql) === TRUE) {
        echo "<p class='Caixa3'> Novo Jogador alterado com sucesso!!!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>

</body>