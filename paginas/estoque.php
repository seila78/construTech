<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="../CSS/estoque.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>
    <?php
        require '../partials/header2.php';
    ?>

    <ul class="filtro">
        <a href="?filtro=todos" style="text-decoration: none; color: inherit;"><li>todos</li></a>
        <a href="?filtro=bruto" style="text-decoration: none; color: inherit;"><li>bruto</li></a>
        <a href="?filtro=acabamento" style="text-decoration: none; color: inherit;"><li>acabamento</li></a>
        <a href="?filtro=ferramentas" style="text-decoration: none; color: inherit;"><li>ferramentas</li></a>
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
                    <th class="azul">editar</th>
                    <th class="azul"></th>
                </tr>
            </thead>
            <tbody>
<?php
require_once __DIR__ . '/../php/data.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // Verifica se a ação é de exclusão
    if (isset($_POST['acao']) && $_POST['acao'] === 'excluir') {
        $idExcluir = (int)$_POST['id']; // Pega o ID enviado pelo formulário
        
        // Percorre a sessão para encontrar o produto com esse ID
        foreach ($_SESSION['produtos'] as $indice => $produto) {
            if ($produto['id'] === $idExcluir) {
                unset($_SESSION['produtos'][$indice]); // Remove o item do array
                $_SESSION['produtos'] = array_values($_SESSION['produtos']); // Reorganiza os índices do array
                break; // Para o loop depois que encontrar e excluir
            }
        }
    } 
    // Se não for excluir, é porque está adicionando (seu código original)
    else {
        // Evita erro caso o array esteja vazio ao tentar achar o max(id)
        $novoId = !empty($_SESSION['produtos']) ? max(array_column($_SESSION['produtos'],'id')) + 1 : 1;
        
        $_SESSION['produtos'][] = [
            'id'        => $novoId,
            'nome'      => $_POST['nome'],
            'categoria' => $_POST['categoria'],
            'descricao' => $_POST['descricao'],
            'imagem'    => $_POST['imagem'],
            'preco'     => $_POST['preco'],
            'quantidade'=> $_POST['quantidade']
        ];     
    }
}
$filtroAtual = isset($_GET['filtro']) ? strtolower($_GET['filtro']) : 'todos';

$produtosExibidos = [];
foreach($_SESSION['produtos'] as $produto) {
    if($filtroAtual === 'todos' || strtolower($produto['categoria']) === $filtroAtual) {
        $produtosExibidos[] = $produto;
    }
}

foreach($produtosExibidos as $produto){
    $baixoEstoque = '';

    if ($produto['quantidade'] <= 30) {
        $baixoEstoque = 'baixo';
    }
    elseif($produto['quantidade'] < 50) {
        $baixoEstoque = 'alerta';
    }
    
    echo '
        <tr class="'.$baixoEstoque.'">
            <td>'.$produto['id'].'</td>
            <td>
                <img class="img-produto" src="'.$produto['imagem'].'" alt="'.$produto['nome'].'">
            </td>
            <td><strong>'.$produto['nome'].'</strong></td>
            <td><span class="categoria">'.$produto['categoria'].'</span></td>
            <td class="descricao">'.$produto['descricao'].'</td>
            <td class="preco">R$'.number_format($produto['preco'], 2, ',', '.').'</td>
            <td class="preco">'.$produto['quantidade'].'</td>
            <td class="preco">R$'.number_format((float)$produto['quantidade'] * (float)$produto['preco'], 2, ',', '.').'</td>
            <td class="acao"><button class="btn-editar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                    <line x1="3.5" y1="16.5" x2="7.5" y2="20.5" />
                    <line x1="14" y1="6" x2="18" y2="10" />
                </svg>
            </button></td>
          <td class="acao">
                <form method="POST" style="margin: 0;">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="id" value="'.$produto['id'].'">
                    <button type="submit" class="btn-excluir">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6" />
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                        </svg>
                    </button>
                </form>
            </td>   
        </tr>
    ';
}
?>
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
                    <td colspan="8" class="total">
                        <?php
                        $totalEstoque = 0;

                        foreach($produtosExibidos as $produto){
                            $totalEstoque += ($produto['quantidade']*(float)$produto['preco']);
                        }
                        
                        echo "R$ " . number_format($totalEstoque, 2, ',', '.');
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <form method="POST" action="estoque.php" class="form-adicionar" id="adicionar">
            <h2>Adicionar Produto:</h2>
            <input type="text" id="produto" name="nome" placeholder="Nome do produto" required>
            
            <select id="categoria" name="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="Bruto">Bruto</option>
                <option value="Acabamento">Acabamento</option>
                <option value="Ferramentas">Ferramentas</option>
            </select>

            <input type="text" id="descricao" name="descricao" placeholder="Descrição" required>
            <input type="number" id="preco" name="preco" placeholder="R$ 0,00" step="0.01" required>
            <input type="text" name="imagem" placeholder="URL da imagem">
            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade" required>
            <button type="submit" class="adicionar">Adicionar</button>
        </form>

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