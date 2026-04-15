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
            <h1>Entre no sistema:</h1><!--bom dia, boa tarde, boa noite-->
            <img src="./imagens/Design sem nome.png" alt="Login">
        </div>

        <div class="formulario">
            <form action='data.php' method='POST'>
            <h2>ENTRE NO SISTEMA!</h2>
            <p>Nome de usuário:</p>
            <input type="text" placeholder="E-mail" name='user'> 
            <br>
            <p>Senha:</p>
            <input type="password" placeholder="Senha" name='senha'> 
            <br>
            <button type="submit" class="btn-formulario">ENVIAR</button>
            </form>
        </div>
    </main>
</body>
</html>