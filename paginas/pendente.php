<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="../CSS/pendente.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>
    <?php
        require '../partials/header2.php';
    ?>
    <h1 class="titulo">pedidos pendentes: </h1>
    <main class="container">
        <div class="card">
            <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png" alt="Ícone Pedido">
            <h2>Pedido #001</h2>
            <div class="btn-container">
                <button class="btn-card btn-visualizar" data-pedido="#001">Visualizar</button>
                <button class="btn-card" onclick="alert('Pedido aprovado com sucesso!')">Aprovar</button>
            </div>
        </div>

        <div class="card">
            <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png" alt="Ícone Pedido">
            <h2>Pedido #002</h2>
            <div class="btn-container">
                <button class="btn-card btn-visualizar" data-pedido="#002">Visualizar</button>
                <button class="btn-card" onclick="alert('Pedido aprovado com sucesso!')">Aprovar</button>
            </div>
        </div>
    </main>

    <div id="modal-detalhes" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title">Detalhes do Pedido</h2>
            <div class="modal-body">
                <p><strong>Cliente:</strong> João da Silva</p>
                <p><strong>Materiais:</strong> Cimento, Areia, Tijolos</p>
                <p><strong>Endereço de Entrega:</strong> Rua Exemplo, 123</p>
                <p><strong>Valor Total:</strong> R$ 1.500,00</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("modal-detalhes");
            const closeBtn = document.querySelector(".close-btn");
            const botoesVisualizar = document.querySelectorAll(".btn-visualizar");
            const modalTitle = document.getElementById("modal-title");

            botoesVisualizar.forEach(botao => {
                botao.addEventListener("click", function() {
                    const numPedido = this.getAttribute("data-pedido");
                    modalTitle.innerText = "Detalhes do Pedido " + numPedido;
                    modal.classList.add("mostrar");
                });
            });

            closeBtn.addEventListener("click", function() {
                modal.classList.remove("mostrar");
            });

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.classList.remove("mostrar");
                }
            });
        });
    </script>
</body>
</html>