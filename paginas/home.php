<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>
    <?php
        require '../partials/header2.php';
    ?>
    <h1 class="bem-vindo">Bem-vindo ao ConstruTech!</h1>
    <h1 class="titulo">Qual área deseja acessar?</h1>
    <main class="container">
        <a href="./estoque.php">
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/3176/3176088.png" alt="estoque">
                <h2>Estoque</h2>
            </div>
        </a>
        <a href="./financeiro.php">
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/1924/1924289.png" alt="financeiro">
                <h2>Financeiro</h2>
            </div>
        </a>
    </main>
</body>
</html>