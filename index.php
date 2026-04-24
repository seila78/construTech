<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>

    <?php
    if (isset($_SESSION['erro'])) {
        echo "<script>alert('{$_SESSION['erro']}');</script>";
        unset($_SESSION['erro']);
    }
    ?>

    <?php
        require 'partials/header.php';
    ?>
    
    <main class="container">
        <div class="login-texto">
            <h1>Entre no sistema:</h1>
            <img src="./imagens/imagem_inicio.png" alt="Login">
        </div>

        <div class="formulario">
            <form action='./php/login.php' method='POST'>
                <h2>ENTRE NO SISTEMA!</h2>
                <p>Nome de usuário:</p>
                <input type="text" placeholder="Username" name='user' required> 
                <br>
                <p>Senha:</p>
                <input type="password" placeholder="Senha" name='senha' required> 
                <br>
                <button type="submit" class="btn-formulario">ENVIAR</button>
            </form>
        </div>
    </main>
</body>
</html>