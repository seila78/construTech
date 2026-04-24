<?php
require_once '../php/data_estoque.php'; 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = trim($_POST['id'] ?? '');
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $descricao = htmlspecialchars($_POST['descricao'] ?? '');
    $preco = filter_var($_POST['preco'] ?? 0, FILTER_VALIDATE_FLOAT);
    $quantidade = filter_var($_POST['quantidade'] ?? 0, FILTER_VALIDATE_INT);
    $categoria = htmlspecialchars($_POST['categoria'] ?? '');
    $imagem = filter_var($_POST['imagem'] ?? '', FILTER_SANITIZE_URL);

    if (!empty($id) && isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
        

        foreach ($_SESSION['produtos'] as $key => $produto) {
            
            if ((string)$produto['id'] === (string)$id) {
                $_SESSION['produtos'][$key]['nome'] = $nome;
                $_SESSION['produtos'][$key]['descricao'] = $descricao;
                $_SESSION['produtos'][$key]['preco'] = $preco;
                $_SESSION['produtos'][$key]['quantidade'] = $quantidade;
                $_SESSION['produtos'][$key]['categoria'] = $categoria;
                $_SESSION['produtos'][$key]['imagem'] = $imagem;
                break; 
            }
        }
    }

    header('Location: ../paginas/estoque.php?status=editado');
    exit;

} else {
    header('Location: ../paginas/estoque.php');
    exit;
}
?>
