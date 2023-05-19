<?php

// Declarei as variáveis
// $hostname é o endereço do servidor
// $username é o login de usuário do MySQL, que por padrão utiliza-se "root"
// $password é o login de senha do MySQL, que por padrão utiliza-se ""
// $dbname é o nome do banco de dados

$hostname = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "projeto_banco_dados";


// mysqli é uma melhoria da conexão do banco de dados mysql
// $conn vai armazenar a conexão do banco de dados mysql

$conn = mysqli_connect($hostname, $username, $password, $dbname);

?>