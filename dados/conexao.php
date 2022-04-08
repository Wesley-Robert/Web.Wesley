<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "banco";

    $mysql = new mysqli($host, $user, $pass, $banco);
    if($mysql->connect_errno){
        echo "Falha ao conectar: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
    }else{
        echo "Sucesso !!!";
    }
?>