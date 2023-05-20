<head>
    <title>Inserindo Jogador</title>
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
    $nome = $_POST["nome"];
    $id_clube = $_POST["id_clube"];
    $salario = $_POST["salario"];
    $id_posicao = $_POST["id_posicao"];
    $data_nascimento = $_POST["data_nascimento"];

    $sql = "INSERT INTO jogador (nome, id_clube, salario, id_posicao, data_nascimento)
    VALUES ('" . $nome . "', '" . $id_clube . "', '" . $salario . "', '" . $id_posicao . "', '" . $data_nascimento . "')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='Caixa3'> Novo Jogador criado com sucesso!!!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>