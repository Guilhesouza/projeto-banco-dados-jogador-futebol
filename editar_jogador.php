<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

include_once('conexao.php');

$id = $_GET['id'];

$sql = 'SELECT * FROM jogador
WHERE jogador.id=' . $id;

$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while($row_jogador = mysqli_fetch_assoc($resultado)){
        ?>

<form action="editando_jogador.php" method="post">
    <input type="text" name="id_jogador" value='<?php echo $row_jogador['id']; ?>' readonly>
    <input type="text" name="nome" value='<?php echo $row_jogador['nome']; ?>' readonly>
<select name="id_clube">
            <?php
                include_once("conexao.php");
                $sql = "SELECT * FROM clube";

                $resultado = mysqli_query($conn, $sql);
                while($row_clube = mysqli_fetch_assoc($resultado)) {
                    if($row_jogador['id_clube'] == $row_clube['id']) {
                        echo "<option selected value=" . $row_clube["id"] . ">
                        " . $row_clube["nome"] . "</option>";
                    } else {
                        echo "<option value=" . $row_clube["id"] . ">
                        " . $row_clube["nome"] . "</option>";
                    }
                }
            ?>
</select>
<input type="text" name="salario" value='<?php echo $row_jogador["salario"]; ?>'>
<select name="id_posicao">
            <?php
                include_once("conexao.php");
                $sql = "SELECT * FROM posicao";

                $resultado = mysqli_query($conn, $sql);
                while($row_posicao = mysqli_fetch_assoc($resultado)) {
                    if($row_jogador['id_posicao'] == $row_posicao['id']){
                        echo "<option selected value=" . $row_posicao["id"] . ">
                        " . $row_posicao["nome"] . "</option>";
                    }else {
                        echo "<option value=" . $row_posicao["id"] . ">
                    " . $row_posicao["nome"] . "</option>";
                    }           
                }
            ?>
</select>
<input type="date" name="data_nascimento" 
value='<?php echo $row_jogador['data_nascimento']; ?>' readonly>
<input type="submit" value="Enviar">

</form>

<?php
    }
}

?>

</body>
</html>