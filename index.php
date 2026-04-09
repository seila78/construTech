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

        <div class="formulario">
                <h2>entre em contato com a gente!</h2>
                <p>Nome completo:</p>
                <input type="text" placeholder="Nome completo"> 
                <br>
                <p>E-mail:</p>
                <input type="email" placeholder="E-mail"> 
                <br>
                <p>Telefone:</p>
                <input type="number" placeholder="Telefone"> 
                <br>
                <p>Assunto:</p>
                <input type="text" placeholder="Assunto" class="assunto"> 
                <br>
                <button type="submit" class="btn-formulario">enviar</button>
            </div>
    </main>
</body>
</html>