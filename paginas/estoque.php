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
                    <th>quantidade</th>
                    <th>investido</th>
                    <th>        </th>
                    <th>        </th>
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
                    <td class="preco">R$ 32,90</td>
                    <td class="preco">R$ 32,90</td>
                    <td class="acao"><button class="btn-editar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                            <line x1="3.5" y1="16.5" x2="7.5" y2="20.5" />
                            <line x1="14" y1="6" x2="18" y2="10" />
                        </svg>
                    </button></td>
                    <td><button class="btn-excluir">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                        </svg>
                    </button></td>
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
        
        <table class="total-investido">
            <thead>
                <tr>
                    <th colspan="8" class="total-texto">Total Investido:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8" class="total">R$ 152,90</td>
                </tr>
            </tbody>
        </table>

        <form class="form-adicionar" id="adicionar">
            <h2>Adicionar Produto:</h2>
            <input type="text" id="produto" name="produto" placeholder="Nome do produto">
            <select id="categoria" name="categoria">
                <option value="">Selecione uma categoria</option>
                <option value="Bruto">Bruto</option>
                <option value="Acabamento">Acabamento</option>
                <option value="Ferramentas">Ferramentas</option>
            </select>
            <input type="text" id="descricao" name="descricao" placeholder="Descrição">
            <input type="number" id="preco" name="preco" placeholder="R$ 0,00" step="0.01">
            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade">
            <button type="submit" class="adicionar">Adicionar</button>
        </form>
    </div>

    <a href="#adicionar">
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
    </a>

</body>
</html>