<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
      table, th, td {
        border: 1px solid black;
      }
    </style>
</head>
<body>

<?php

include_once('conexao.php');

$sql = "SELECT * FROM posicao";

$resultado = mysqli_query($conn, $sql);

?>
<table>
  <tr>
    <td align ="center" >ID</td>
    <td align ="center" >Nome</td>
    <td align ="center" colspan="2">Ação</td>
  </tr>

  <?php

      if (mysqli_num_rows($resultado) > 0) {

        while($row = mysqli_fetch_assoc($resultado)) {
          ?>
          <tr> 
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["nome"];?></td>
            <td> <a href="editar_posicao.php?id=<?php echo $row["id"]; ?>">Editar</a></td>
            <td> <a href="deletar_posicao.php?id=<?php echo $row["id"]; ?>">Deletar</a></td>
          </tr>

          <?php
        }
      }
  ?>

</table>

</body>
</html>