<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConstruTech</title>
    <link rel="stylesheet" href="../CSS/financeiro.css">
    <link rel="icon" type="image/x-icon" href="./imagens/icon.png">
</head>
<body>
    <?php
        require '../partials/header2.php';
        require_once '../php/datafinanceiro.php'; 
        require_once '../php/data_pedente.php';
        require_once '../php/data_estoque.php';
        
        $qtdPedidosPendentes = 0;
        
        $listaPedidos = isset($_SESSION['pedidos']) ? $_SESSION['pedidos'] : (isset($pedidos) ? $pedidos : []);

        if (is_array($listaPedidos)) {
            foreach ($listaPedidos as $pedido) {
                if (isset($pedido['status'])) {
                    if (strtolower($pedido['status']) === 'pendente') {
                        $qtdPedidosPendentes++;
                    }
                } else {
                    $qtdPedidosPendentes++;
                }
            }
        }

        $qtdBaixoEstoque = 0;
        $limite_estoque = 50;
        
        if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
            foreach ($_SESSION['produtos'] as $produto) {
                if (isset($produto['quantidade']) && $produto['quantidade'] <= $limite_estoque) {
                    $qtdBaixoEstoque++;
                }
            }
        }
    ?>
    <main class="container">
        <div class="container-tabela">
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['extrato']) && is_array($_SESSION['extrato'])) {
                        foreach ($_SESSION['extrato'] as $transacao) {
                            
                            if ($transacao['tipo'] === 'venda') {
                                $icone = '
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                    <polygon points="50,10 90,50 65,50 65,90 35,90 35,50 10,50" fill="#4CAF50" />
                                </svg>';
                            } else {
                                $icone = '
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                    <polygon points="35,10 65,10 65,50 90,50 50,90 10,50 35,50" fill="#F44336" />
                                </svg>';

                                $transacao['valor'] = -($transacao['valor']);
                            }

                            $valorFormatado = 'R$ ' . number_format($transacao['valor'], 2, ',', '.');

                            echo '
                            <tr>
                                <td><strong>' . htmlspecialchars($transacao['produto']) . '</strong></td>
                                <td>' . $icone . '</td>
                                <td class="preco">' . htmlspecialchars($transacao['quantidade']) . '</td>
                                <td class="preco">' . $valorFormatado . '</td>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="4" style="text-align:center;">Nenhum dado financeiro encontrado.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="lado-direito">
            <div class="card-lucro">
                <?php 
                    $lucroFormatado = 'R$ ' . number_format((isset($subtotal) ? $subtotal : 0), 2, ',', '.');
                ?>
                <h2><span><?php echo $lucroFormatado; ?></span><br>Saldo</h2>
            </div>
            
            <div class="card">
                <h2><span><?php echo $qtdPedidosPendentes; ?></span><br>pedidos pendentes</h2>
                <a href="./pendente.php">
                    <button class="botao">Ver pedidos</button>
                </a>
            </div>
            <div class="card">
                <h2><span><?php echo $qtdBaixoEstoque; ?></span><br>Baixo estoque</h2>
                <a href="./baixo_estoque.php">
                    <button class="botao">Solicitar fornecedor</button>
                </a>
            </div>
            
        </div>
    </main>
</body>
</html>