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
            <h1>Entre no sistema:</h1>
            <img src="./imagens/Design sem nome.png" alt="Login">
        </div>

        <div class="formulario" action='init.php' method='POST'>
            <h2>entre no sistema!</h2>
            <p>E-mail:</p>
            <input type="email" placeholder="E-mail" name='email'> 
            <br>
            <p>Senha:</p>
            <input type="password" placeholder="Senha" name='senha'> 
            <br>
            <button type="submit" class="btn-formulario">enviar</button>
        </div>
    </main>
</body>
</html>