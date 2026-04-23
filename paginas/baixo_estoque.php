<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech - Baixo Estoque</title>
    <link rel="stylesheet" href="../CSS/baixo_estoque.css">
    <link rel="icon" type="image/x-icon" href="../imagens/icon.png">
</head>
<body>
    <?php
        include '../partials/header2.php';
        require_once __DIR__ . '/../php/data.php'; 
    ?>
    <h1 class="titulo">Produtos em Baixo Estoque</h1>
    <main class="container">
        
        <?php
        $temProdutoBaixo = false;

        foreach ($_SESSION['produtos'] as $produto) {
            
            if ($produto['quantidade'] < 50) {
                $temProdutoBaixo = true;
                
                if ($produto['quantidade'] <= 30) {
                    $classeCor = 'critico';
                    $statusTexto = 'Crítico';
                } else {
                    $classeCor = 'alerta';
                    $statusTexto = 'Alerta';
                }

                echo '
                <div class="card">
                    <img src="' . htmlspecialchars($produto['imagem']) . '" alt="Ícone Produto">
                    <h2>' . htmlspecialchars($produto['nome']) . '</h2>
                    
                    <div class="info-estoque">
                        <p>Estoque: <span class="' . $classeCor . '">' . $produto['quantidade'] . ' unidades (' . $statusTexto . ')</span></p>
                        <p>Mínimo ideal: <span class="tranquilo"> 50 unidades</span></p>
                    </div>

                    <div class="btn-container">
                        <button class="btn-card btn-visualizar" data-nome="' . htmlspecialchars($produto['nome']) . '">Detalhes</button>
                        <button class="btn-card btn-comprar" 
                                data-id="' . $produto['id'] . '" 
                                data-nome="' . htmlspecialchars($produto['nome']) . '">
                            Comprar
                        </button>
                    </div>
                </div>';
            }
        }

        if (!$temProdutoBaixo) {
            echo '<h2 style="color: white; text-align: center;">Nenhum produto com estoque crítico ou em alerta no momento!</h2>';
        }
        ?>

    </main>

    <div id="modal-detalhes" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title-detalhes">Detalhes do Produto</h2>
            <div class="modal-body">
                <p><strong>Fornecedor:</strong> Votorantim</p>
                <p><strong>Última Compra:</strong> 10/03/2026</p>
                <p><strong>Status:</strong> Verificar Estoque</p>
            </div>
        </div>
    </div>

    <div id="modal-comprar" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title-comprar">Comprar Produto</h2>
            <div class="modal-body">
                <p class="info" style="text-align: center;"><strong>Informe a quantidade desejada:</strong></p>
                <div class="acoes-comprar">
                    <input type="number" min="1" id="input-qtd" placeholder="Quantidade" class="quantidade">
                    <button class="btn-card" id="btn-enviar-compra">Confirmar Compra</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const modalComprar = document.getElementById("modal-comprar");
        const modalDetalhes = document.getElementById("modal-detalhes");

        const closeBtns = document.querySelectorAll(".close-btn");
        const botoesComprar = document.querySelectorAll(".btn-comprar");
        const botoesVisualizar = document.querySelectorAll(".btn-visualizar");
        
        const modalTitleComprar = document.getElementById("modal-title-comprar");
        const modalTitleDetalhes = document.getElementById("modal-title-detalhes");
        const btnEnviarCompra = document.getElementById("btn-enviar-compra");
        const inputQuantidade = document.getElementById("input-qtd");

        let produtoIdAtual = null;

        botoesComprar.forEach(botao => {
            botao.addEventListener("click", function() {
                produtoIdAtual = this.getAttribute("data-id");
                const nomeProduto = this.getAttribute("data-nome");
                
                modalTitleComprar.innerText = "Comprar: " + nomeProduto;
                inputQuantidade.value = ""; 
                modalComprar.classList.add("mostrar");
            });
        });

        botoesVisualizar.forEach(botao => {
            botao.addEventListener("click", function() {
                const nomeProduto = this.getAttribute("data-nome");
                modalTitleDetalhes.innerText = "Detalhes: " + nomeProduto;
                modalDetalhes.classList.add("mostrar");
            });
        });

        closeBtns.forEach(btn => {
            btn.addEventListener("click", function() {
                this.closest(".modal").classList.remove("mostrar");
            });
        });

        btnEnviarCompra.addEventListener("click", function() {
            const qtd = inputQuantidade.value;

            if (qtd <= 0 || !produtoIdAtual) {
                alert("Informe uma quantidade válida.");
                return;
            }

            const formData = new FormData();
            formData.append('id', produtoIdAtual);
            formData.append('quantidade', qtd);

            fetch('../php/atualizar_estoque.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Estoque atualizado! Nova quantidade: ' + data.nova_quantidade);
                    location.reload(); 
                } else {
                    alert('Erro ao atualizar estoque no servidor.');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Erro de comunicação com o servidor.');
            });
        });
    });
    </script>
</body>
</html>