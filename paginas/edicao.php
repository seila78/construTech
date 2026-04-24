
<?php 
require_once '../php/data_estoque.php';


$id_get = isset($_GET['id']) ? trim($_GET['id']) : '';

$produtoEncontrado = null;

if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
    foreach($_SESSION['produtos'] as $p){
        if ((string)$p['id'] === (string)$id_get){
            $produtoEncontrado = $p; 
            break;
        }
    }
}

if (!$produtoEncontrado) {
    header('Location: estoque.php');
    exit;
}

require '../partials/header2.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto.</title>
    <link rel="stylesheet" href="../CSS/edicao.css">
</head>
<body>
    
</body>
</html>
<main class="container">
    <div class="card-produto">
        <div class="imagem-box">
            <div class="imagem-wrapper">
                <img src="<?= $produtoEncontrado['imagem'] ?>" alt="<?= $produtoEncontrado['nome'] ?>">
            </div>
        </div>
                    
        <div class="card-content">
            <form action="../php/processar_edicao.php" method="POST">
                <input type="hidden" name="id" value="<?= $produtoEncontrado['id'] ?>">

                <input type="text" name="nome" class="input-nome" value="<?= $produtoEncontrado['nome'] ?>">
            
                <input type="text" name="descricao" class="input-descricao" value="<?= $produtoEncontrado['descricao'] ?>">

                <input type="number" name="preco" class="input-preco" value="<?= $produtoEncontrado['preco'] ?>" step="0.01">

                <input type="number" name="quantidade" class="input-estoque" value="<?= $produtoEncontrado['quantidade'] ?>">

                <select name="categoria">
                    <option value="Bruto" <?= $produtoEncontrado['categoria'] == 'Bruto' ? 'selected' : '' ?>>Bruto</option>
                    <option value="Ferramentas" <?= $produtoEncontrado['categoria'] == 'Ferramentas' ? 'selected' : '' ?>>Ferramentas</option>
                    <option value="Acabamento" <?= $produtoEncontrado['categoria'] == 'Acabamento' ? 'selected' : '' ?>>Acabamento</option>
                </select>

                <input type="text" name="imagem" class="input-descricao" value="<?= $produtoEncontrado['imagem']?>">

                <button class="botao" type="submit"><a>Salvar Alterações</a></button>
            </form>
        </div>
    </div>
</main>
</body>
</html>