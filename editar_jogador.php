<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogador</title>
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

    // GET = Buscar o id que o usuário passar
    
    $id = $_GET['id'];

    $sql = 'SELECT * FROM jogador
WHERE jogador.id=' . $id;

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($row_jogador = mysqli_fetch_assoc($resultado)) {
            ?>

            <form action="editando_jogador.php" method="post">

                <div class="row">
                    <div class="column">
                        <br>
                        <table>
                            <tr>
                                <td class="Caixa3">ID</td>
                                <td class="Caixa3">Nome Jogador</td>
                                <td class="Caixa3">Nome Clube</td>
                                <td class="Caixa3">Salário</td>
                                <td class="Caixa3">Posição</td>
                                <td class="Caixa3">Data de Nascimento</td>
                                <td class="Caixa3"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="Botao2" name="id_jogador"
                                        value='<?php echo $row_jogador['id']; ?>' readonly></td>
                                <td><input type="text" class="Botao2" name="nome" value='<?php echo $row_jogador['nome']; ?>'
                                        readonly></td>
                                <td><select class="Botao2" name="id_clube">
                                        <?php
                                        include_once("conexao.php");
                                        $sql = "SELECT * FROM clube";

                                        $resultado = mysqli_query($conn, $sql);
                                        while ($row_clube = mysqli_fetch_assoc($resultado)) {
                                            if ($row_jogador['id_clube'] == $row_clube['id']) {
                                                echo "<option selected value=" . $row_clube["id"] . ">
                                             " . $row_clube["nome"] . "</option>";
                                            } else {
                                                echo "<option value=" . $row_clube["id"] . ">
                                             " . $row_clube["nome"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="text" class="Botao2" name="salario"
                                        value='<?php echo $row_jogador["salario"]; ?>'></td>
                                <td><select class="Botao2" name="id_posicao">
                                        <?php
                                        include_once("conexao.php");
                                        $sql = "SELECT * FROM posicao";

                                        $resultado = mysqli_query($conn, $sql);
                                        while ($row_posicao = mysqli_fetch_assoc($resultado)) {
                                            if ($row_jogador['id_posicao'] == $row_posicao['id']) {
                                                echo "<option selected value=" . $row_posicao["id"] . ">
                                           " . $row_posicao["nome"] . "</option>";
                                            } else {
                                                echo "<option value=" . $row_posicao["id"] . ">
                                           " . $row_posicao["nome"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="date" class="Botao2" name="data_nascimento"
                                        value='<?php echo $row_jogador['data_nascimento']; ?>' readonly></td>
                                <td><input type="submit" class="Botao2" value="Enviar"></td>
                            </tr>
                        </table>
            </form>

            <?php
        }
    }

    ?>

</body>

</html>