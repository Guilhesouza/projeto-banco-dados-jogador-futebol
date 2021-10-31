<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> table, th, td {border:1px solid black;} </style>
    
   
</head>
<body>

<?php
    
include_once('conexao.php');

$consultar = 'SELECT * FROM clube'; 

$result = mysqli_query($conn, $consultar);

?>

<table>
    <tr>
      <td align="center">ID</td>  
      <td align="center">Nome</td>
      <td align="center" colspan="2">Ação</td>
    </tr>

    <?php

        if (mysqli_num_rows($result) > 0) {
          
            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr> 
                       <td>' . $row["id"] . '</td>
                       <td>' . $row["nome"] . '</td>
                       <td> <a href="editar_clube.php?id=' . $row["id"]. '" > Editar</a> </td>
                       <td> <a href="deletar_clube.php?id=' . $row["id"] . '" > Deletar</a> </td>
                    </tr>';
            }
          } else {
            echo "0 resultado";
          }
    ?>

</table>

</body>
</html>