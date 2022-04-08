<?php 
    include('../dados/conexaos.php');

    if(empty($_POST['nome']) || empty($_POST['senha'])){
        header('Location: cadastro.php');
        exit();
    }

    $user = mysqli_real_escape_string($_POST['usuario']);
    $pass = mysqli_real_escape_string($_POST['senha']);
?>