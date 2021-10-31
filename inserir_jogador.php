<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserindo_jogador.php" method="post">
            <input type="text" name="nome" />
        <select name="id_clube">
            <?php
                include_once("conexao.php");
                $sql = "SELECT * FROM clube";

                $resultado = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value=" . $row["id"] . ">" . $row["nome"] . "</option>";
                }
            ?>
        </select>
        <input type="text" name="salario" />
        <select name="id_posicao">
            <?php
                include_once("conexao.php");
                $sql = "SELECT * FROM posicao";

                $resultado = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value=" . $row["id"] . ">" . $row["nome"] . "</option>";
                }
            ?>
        </select>
        <input type="date" name="data_nascimento" />
        <input type="submit" value="Enviar">
</form>
</body>
</html>