<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Jogador</title>
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
    <form action="inserindo_jogador.php" method="post">

        <div class="row">
            <div class="column">
                <br>
                <table>
                    <tr>
                        <td class="Caixa3">Nome Jogador</td>
                        <td class="Caixa3">Nome Clube</td>
                        <td class="Caixa3">Salário</td>
                        <td class="Caixa3">Posição</td>
                        <td class="Caixa3">Data de Nascimento</td>
                        <td class="Caixa3"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="Botao2" name="nome" /></td>
                        <td><select class="Botao2" name="id_clube">
                                <?php
                                include_once("conexao.php");
                                $sql = "SELECT * FROM clube";

                                $resultado = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($resultado)) {
                                    echo "<option value=" . $row["id"] . ">" . $row["nome"] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td><input type="text" class="Botao2" name="salario" /></td>
                        <td><select class="Botao2" name="id_posicao">
                                <?php
                                include_once("conexao.php");
                                $sql = "SELECT * FROM posicao";

                                $resultado = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($resultado)) {
                                    echo "<option value=" . $row["id"] . ">" . $row["nome"] . "</option>";
                                }
                                ?>
                            </select></td>
                        <td><input type="date" class="Botao2" name="data_nascimento" /></td>
                        <td><input type="submit" class="Botao2" value="Enviar"></td>
                    </tr>
                </table>
    </form>
</body>

</html>