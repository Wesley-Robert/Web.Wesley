<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $banco = 'banco';

    $conexao = mysqli_connect($host, $user, $pass, $banco) or die ('Não foi pussível se connectar (' . $conexao->connect_errno . ')');
?>