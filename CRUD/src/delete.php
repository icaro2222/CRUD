<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes where id = '$id' ";

    if(mysqli_query($connect, $sql)){
        $_SESSION['menssagem'] = "Deletado com sucesso!";
        header('Location: index.php');
    }else{
        $_SESSION['menssagem'] = "Erro ao deletar!";
        header('Location: index.php');
    }
endif;

