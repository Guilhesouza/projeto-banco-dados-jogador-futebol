<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Posição</title>
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
    na linha 16 está pegando os dados da conexao.php e trazendo para a tela editar_clube.php
-->

    <?php
    include_once("conexao.php");

    // na linha 20 o $id está trazendo o id do resultado de acordo com cada id na tela do consulta_clube.php
    
    $id = $_GET['id'];

    // na linha 24 está sendo preparado o comando para ser executado no mysqli_query, e o $resultado vai armazenar o resultado da execução
    
    $sql = 'SELECT * FROM posicao WHERE id=' . $id;
    $resultado = mysqli_query($conn, $sql);

    // na linha 29 vai ser verificado os numeros de linhas que estão dentro do $resultado e se for maior que 0
    
    if (mysqli_num_rows($resultado) > 0) {

        // na linha 33, vai ser transformado o resultado em que cada linha seja executada
    
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <form action="editando_posicao.php" method="post">
                <div class="row">
                    <div class="column">
                        <br>
                        <table>
                            <tr>
                                <td class="Caixa3">ID</td>
                                <td class="Caixa3">Posição</td>
                                <td class="Caixa3"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="Botao2" name="id_posicao" value='<?php echo $row['id']; ?>'
                                        readonly></td>
                                <td><input type="text" class="Botao2" name="nome_posicao" value='<?php echo $row['nome']; ?>'>
                                </td>
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