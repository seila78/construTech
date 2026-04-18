<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech - Baixo Estoque</title>
    <link rel="stylesheet" href="../CSS/baixo_estoque.css">
</head>
<body>
    <?php
        require '../partials/header2.php';
    ?>
    <h1 class="titulo">Produtos em Baixo Estoque</h1>
    <main class="container">
        
        <div class="card">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/053/814/416/small/versatile-bag-of-powdered-cement-for-construction-projects-on-transparent-background-png.png" alt="Ícone Produto">
            <h2>Cimento CP II (50kg)</h2>
            
            <div class="info-estoque">
                <h3>Estoque: <span class="critico">5 unidades</span></h3>
                <h3>Mínimo ideal: <span class="tranquilo"> 50 unidades</span></h3>
            </div>

            <div class="btn-container">
                <button class="btn-card btn-visualizar" data-pedido="Cimento CP II">Detalhes</button>
                <button class="btn-card btn-comprar">Comprar</button>
            </div>
        </div>

        <div class="card">
            <img src="https://cdn.awsli.com.br/2500x2500/2674/2674061/produto/343205423/23cddc63643264a219aa251e10b1a191-7l9s2ngs5t.jpg" alt="Ícone Produto">
            <h2>Areia Média</h2>
            
            <div class="info-estoque">
                <h3>Estoque: <span class="critico">2 unidades</span></h3>
                <h3>Mínimo ideal: <span class="tranquilo"> 10 unidades</span></h3>
            </div>

            <div class="btn-container">
                <button class="btn-card btn-visualizar" data-pedido="Areia Média">Detalhes</button>
                <button class="btn-card btn-comprar">Comprar</button>
            </div>
        </div>

    </main>

    <div id="modal-detalhes" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title">Detalhes do Produto</h2>
            <div class="modal-body">
                <p><strong>Fornecedor:</strong> Votorantim</p>
                <p><strong>Última Compra:</strong> 10/03/2026</p>
                <p><strong>Preço Médio:</strong> R$ 35,00 / un</p>
                <p><strong>Status:</strong> Crítico</p>
            </div>
        </div>
    </div>

    <div id="modal-comprar" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="modal-title">Detalhes do Produto</h2>
            <div class="modal-body">
                <p><strong>Estoque:</strong> 0 unidades</p>
                <p><strong>Valor da compra:</strong> R$ 35,00</p>
                <p class="info" style="text-align: center;"><strong>Informe a quantidade:</strong></p>
                
                <div class="acoes-comprar">
                    <input type="number" min="1" placeholder="Quantidade" class="quantidade">
                    <button id="btn-enviar-compra" class="btn-card fechar">Comprar</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("modal-detalhes");
            const modalComprar = document.getElementById("modal-comprar");
            const closeBtns = document.querySelectorAll(".close-btn");
            const botoesVisualizar = document.querySelectorAll(".btn-visualizar");
            const botoesComprar = document.querySelectorAll(".btn-comprar");
            const modalTitle = document.getElementById("modal-title");
            const btnEnviarCompra = document.getElementById("btn-enviar-compra");

            botoesVisualizar.forEach(botao => {
                botao.addEventListener("click", function() {
                    const nomeProduto = this.getAttribute("data-pedido");
                    modalTitle.innerText = "Detalhes: " + nomeProduto;
                    modal.classList.add("mostrar");
                });
            });

            botoesComprar.forEach(botao => {
                botao.addEventListener("click", function() {
                    const nomeProduto = this.getAttribute("data-pedido");
                    modalTitle.innerText = "Comprar: " + nomeProduto;
                    modalComprar.classList.add("mostrar");
                });
            });

            closeBtns.forEach(btn => {
                btn.addEventListener("click", function() {
                    modal.classList.remove("mostrar");
                    modalComprar.classList.remove("mostrar");
                });
            });

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.classList.remove("mostrar");
                }
                if (event.target === modalComprar) {
                    modalComprar.classList.remove("mostrar");
                }
            });

            btnEnviarCompra.addEventListener("click", function() {
                alert('Solicitação de compra aberta!');
                modalComprar.classList.remove("mostrar");
                document.querySelector(".quantidade").value = ""; 
            });
        });
    </script>
</body>
</html>