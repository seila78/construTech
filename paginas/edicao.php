<?php require_once __DIR__ .'../php/data.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Produto</title>
    <link rel="stylesheet" href="../CSS/edicao.css">
    <link rel="icon" type="image/x-icon" href="../imagens/icon.png">
</head>
<body>
    <?php require '../partials/header2.php'; ?>

    <main class="container">
        <div class="card-produto">
            <div class="imagem-box">
                <div class="imagem-wrapper">
                    <img src="https://i.pinimg.com/736x/9e/2c/9b/9e2c9bf1f7abf645d6e2e051a53efb92.jpg" alt="Café Gourmet">
                    <input type="file" name="trocar_imagem" accept="image/*">
                </div>
            </div>
                        
            <div class="card-content">
                <input type="text" class="input-nome" placeholder="nome do produto">
                <input type="text" class="input-descricao" placeholder="descrição do produto">
                <input type="number" class="input-preco" placeholder="preço do produto" step="0.01" min="0">
                <input type="number" class="input-estoque" placeholder="quantidade em estoque" min="0">
                <select name="categoria" id="categoria">
                    <option value="">Selecione uma categoria</option>
                    <option value="Bruto">Bruto</option>
                    <option value="Ferramentas">Ferramentas</option>
                    <option value="Acabamento">Acabamento</option>
                </select>

                <button class="botao">Salvar</button>
            </div>
        </div>
    </main>
</body>
</html>