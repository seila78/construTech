<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="../CSS/estoque.css">
</head>
<body>
    <?php
        require '../partials/header2.php';
    ?>

    <ul class="filtro">
        <li>todos</li>
        <li>bruto</li>
        <li>acabamento</li>
        <li>ferramentas</li>
    </ul>
    
    <div class="container-tabela">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img class="img-produto" src="https://static.vecteezy.com/system/resources/thumbnails/053/814/416/small/versatile-bag-of-powdered-cement-for-construction-projects-on-transparent-background-png.png" alt="Cimento CP II (50kg)">
                    </td>
                    <td><strong>Cimento CP II (50kg)</strong></td>
                    <td><span class="categoria">Bruto</span></td>
                    <td class="descricao">Essencial para fundações, contrapisos e rebocos. Oferece alta durabilidade e resistência para a estrutura da sua obra. Vendido por saco.</td>
                    <td class="preco">R$ 32,90</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>
                        <img class="img-produto" src="https://cdn.awsli.com.br/2500x2500/2674/2674061/produto/343205423/23cddc63643264a219aa251e10b1a191-7l9s2ngs5t.jpg" alt="Areia Média">
                    </td>
                    <td><strong>Areia Média</strong></td>
                    <td><span class="categoria">Bruto</span></td>
                    <td class="descricao">Usada na mistura de argamassa e concreto. Possui granulometria ideal para um acabamento perfeito e estruturado. Vendida por metro cúbico (m³) ou saco.</td>
                    <td class="preco">R$ 120,00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <button class="button">
    <svg 
        class="svg" 
        xmlns="http://www.w3.org/2000/svg" 
        height="25px" 
        viewBox="0 -960 960 960" 
        width="25px" 
        fill="#000000"
    >
        <path d="M480-160L160-480l56-56 224 224v-488h80v488l224-224 56 56-320 320Z"></path>
    </svg>
</button>
</body>
</html>