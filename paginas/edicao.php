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
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../CSS/edicao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <div class="card-produto">
            <div class="imagem-section">
                <div class="imagem-container">
                    <img src="<?= htmlspecialchars($produtoEncontrado['imagem']) ?>" alt="Preview" id="preview-img">
                </div>
                <p class="status-texto">ID do Produto: #<?= $produtoEncontrado['id'] ?></p>
            </div>
                        
            <div class="form-section">
                <div class="form-header">
                    <h2>Editar Produto</h2>
                    <p>Altere as informações abaixo e clique em salvar.</p>
                </div>

                <form action="../php/processar_edicao.php" method="POST" class="form-grid">
                    <input type="hidden" name="id" value="<?= $produtoEncontrado['id'] ?>">

                    <div class="input-group full-width">
                        <label><i class="fas fa-tag"></i> Nome do Produto</label>
                        <input type="text" name="nome" value="<?= htmlspecialchars($produtoEncontrado['nome']) ?>" required>
                    </div>
                
                    <div class="input-group full-width">
                        <label><i class="fas fa-align-left"></i> Descrição Curta</label>
                        <input type="text" name="descricao" value="<?= htmlspecialchars($produtoEncontrado['descricao']) ?>">
                    </div>

                    <div class="row">
                        <div class="input-group">
                            <label><i class="fas fa-dollar-sign"></i> Preço (R$)</label>
                            <input type="number" name="preco" value="<?= $produtoEncontrado['preco'] ?>" step="0.01" required>
                        </div>

                        <div class="input-group">
                            <label><i class="fas fa-boxes"></i> Estoque</label>
                            <input type="number" name="quantidade" value="<?= $produtoEncontrado['quantidade'] ?>" required>
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label><i class="fas fa-layer-group"></i> Categoria</label>
                        <select name="categoria">
                            <option value="Bruto" <?= $produtoEncontrado['categoria'] == 'Bruto' ? 'selected' : '' ?>>Bruto</option>
                            <option value="Ferramentas" <?= $produtoEncontrado['categoria'] == 'Ferramentas' ? 'selected' : '' ?>>Ferramentas</option>
                            <option value="Acabamento" <?= $produtoEncontrado['categoria'] == 'Acabamento' ? 'selected' : '' ?>>Acabamento</option>
                        </select>
                    </div>

                    <div class="input-group full-width">
                        <label><i class="fas fa-image"></i> URL da Imagem</label>
                        <input type="text" name="imagem" value="<?= htmlspecialchars($produtoEncontrado['imagem'])?>" placeholder="https://exemplo.com/foto.jpg">
                    </div>

                    <div class="form-actions">
                        <button class="btn-cancelar" type="button" onclick="window.history.back()">Cancelar</button>
                        <button class="btn-salvar" type="submit">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>