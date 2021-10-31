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
    include_once("conexao.php");

    $id = $_GET['id'];

    $sql = 'SELECT * FROM posicao WHERE id=' . $id;
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while($row = mysqli_fetch_assoc($resultado)) {
            ?>
<form action="editando_posicao.php" method="post">
    <input type="text" name="id_posicao" value= '<?php echo $row['id']; ?>' readonly>
    <input type="text" name="nome_posicao" value= '<?php echo $row['nome']; ?>'>
    <input type="submit" value="Enviar">
</form>    
            <?php 
        }
    }
?>

</body>
</html>