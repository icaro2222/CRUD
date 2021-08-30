<?php
// Conexão com Banco de Dados

$servename = "localhost";
$username = "root";
$password = "";
$db_name = "CRUD";

$connect = mysqli_connect($servename, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "Erro na Conexão: ".mysqli_connect_error();
endif;