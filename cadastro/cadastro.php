<?php

    if(isset($_POST['submit'])){
        include_once('../Dados/conexao.php'); 

        $name = $_POST['nome'];
        $pass = $_POST['senha'];

        $submitt = mysqli_query($mysql, "INSERT INTO `clientes`(`nome`, `senha`) VALUES ('$name', '$pass')");
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Web</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="shortcut icon" href="../img/Chromatix-Keyboard-Keys-Letter-uppercase-W.ico" type="image/x-icon">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="cadastro.php" method="POST">
            <div class="user-box">
                <input type="text" name="nome" required="">
                <label for="user">Usuário</label>
            </div>
            <div class="user-box">
                <input type="password" name="senha" required="">
                <label for="password">Senha</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit" id="btn-cad" name="submit">ENTRAR</button>
            </a>
        </form>
    </div>
</body>
</html>