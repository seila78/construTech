<?php
session_start();
//---------------------------------------LOGIN✅--------------------------------------------
$_SESSION['usuarios']=

$usuarios =[
    [
    'id'    => 1,
    'nome'  => 'admin',
    'senha' => '123'
    ]
];

$nome = $_POST['user'] ?? '';
$senha = $_POST['senha'] ?? '';

$acesso = false;

foreach ($usuarios as $user) {
    if ($user['nome'] === $nome && $user['senha'] === $senha) {
        $acesso = true;
        break;
    }
}

if ($acesso === true) {
    header("Location: ../paginas/home.php");
    exit;
} else {
    $_SESSION['erro'] = "Usuário ou senha errado!";
    header("Location: ../index.php");
    exit;
}
session_start();

if (isset($_SESSION['erro'])) {
    echo "<script>alert('{$_SESSION['erro']}');</script>";
    unset($_SESSION['erro']);
}
?>
