<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header('Content-Type: application/json');

if (isset($_POST['id']) && isset($_POST['quantidade'])) {
    $id = (int)$_POST['id'];
    $quantidadeAdicional = (int)$_POST['quantidade'];

    if ($quantidadeAdicional > 0 && isset($_SESSION['produtos'])) {
        foreach ($_SESSION['produtos'] as &$produto) {
            if ($produto['id'] === $id) {
                $produto['quantidade'] += $quantidadeAdicional;
                echo json_encode(['success' => true, 'nova_quantidade' => $produto['quantidade']]);
                exit;
            }
        }
    }
}

echo json_encode(['success' => false]);
?>