<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>
    <main class="container">
        <div class="login-texto">
                <?php
                include 'php/saudacao.php';
                ?>
            <img src="./imagens/Design sem nome.png" alt="Login">
        </div>

        <div class="formulario">
            <form action='./php/data.php' method='POST'>
            <h2>ENTRE NO SISTEMA!</h2>
            <p>Nome de usuário:</p>
            <input type="text" placeholder="Digite seu usuário" name='user' required>
            <br>
            <p>Senha:</p>
            <input type="password" placeholder="Digite sua senha" name='senha' required> 
            <br>
            <button type="submit" class="btn-formulario">ENVIAR</button>
            </form>
            <?php
            session_start();
            if (isset($_SESSION['erro'])) {
                echo "<script>alert('{$_SESSION['erro']}');</script>";
                unset($_SESSION['erro']);
            }
            ?>
        </div>
    </main>
</body>
</html>