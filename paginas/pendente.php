<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech - Pendentes</title>
    <link rel="stylesheet" href="../CSS/pendente.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>
    <?php
        require '../partials/header2.php';
        require_once '../php/data_pedente.php'; 
    ?>

    <h1 class="titulo">Pedidos Pendentes: </h1>
    
    <main class="container">
        <?php foreach ($pedidos as $pedido): ?>
            <div class="card">
                <img src="<?php echo $pedido['imagem']; ?>" alt="Imagem do Pedido">
                <h2>Pedido #<?php echo str_pad($pedido['id'], 3, '0', STR_PAD_LEFT); ?></h2>
                
                <div class="btn-container">
                    <button class="btn-card btn-visualizar" 
                        data-id="<?php echo $pedido['id']; ?>"
                        data-cliente="<?php echo $pedido['Cliente']; ?>"
                        data-materiais="<?php echo $pedido['Materiais']; ?>"
                        data-endereco="<?php echo $pedido['Endereço de Entrega']; ?>"
                        data-valor="<?php echo number_format($pedido['Valor Total'], 2, ',', '.'); ?>">
                        Visualizar
                    </button>
                    <button class="btn-card" onclick="aprovarPedido(this, <?php echo $pedido['id']; ?>)">
                        Aprovar
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <div id="modal-detalhes" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title">Detalhes do Pedido</h2>
            <div class="modal-body">
                <p><strong>Cliente:</strong> <span id="detalhe-cliente"></span></p>
                <p><strong>Materiais:</strong> <span id="detalhe-materiais"></span></p>
                <p><strong>Endereço de Entrega:</strong> <span id="detalhe-endereco"></span></p>
                <p><strong>Valor Total:</strong> R$ <span id="detalhe-valor"></span></p>
            </div>
        </div>
    </div>

    <script>
        function aprovarPedido(botao, id) {
            alert('Pedido #' + id + ' aprovado com sucesso!');
            
            const card = botao.closest('.card');
            if (card) {
                card.style.transition = "opacity 0.3s ease";
                card.style.opacity = "0";
                
                setTimeout(() => {
                    card.remove();
                }, 300);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("modal-detalhes");
            const closeBtn = document.querySelector(".close-btn");
            const botoesVisualizar = document.querySelectorAll(".btn-visualizar");
            
            const modalTitle = document.getElementById("modal-title");
            const spanCliente = document.getElementById("detalhe-cliente");
            const spanMateriais = document.getElementById("detalhe-materiais");
            const spanEndereco = document.getElementById("detalhe-endereco");
            const spanValor = document.getElementById("detalhe-valor");

            botoesVisualizar.forEach(botao => {
                botao.addEventListener("click", function() {
                    const id = this.getAttribute("data-id");
                    const cliente = this.getAttribute("data-cliente");
                    const materiais = this.getAttribute("data-materiais");
                    const endereco = this.getAttribute("data-endereco");
                    const valor = this.getAttribute("data-valor");

                    modalTitle.innerText = "Detalhes do Pedido #" + id.padStart(3, '0');
                    spanCliente.innerText = cliente;
                    spanMateriais.innerText = materiais;
                    spanEndereco.innerText = endereco;
                    spanValor.innerText = valor;

                    modal.classList.add("mostrar");
                });
            });

            closeBtn.addEventListener("click", () => modal.classList.remove("mostrar"));

            window.addEventListener("click", (event) => {
                if (event.target === modal) modal.classList.remove("mostrar");
            });
        });
    </script>
</body>
</html>