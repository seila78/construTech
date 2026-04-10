<?php
require 'data.php';

$nome = $_POST['nome'] ?? '';
$senha = $_POST['senha'] ?? '';

$acesso_permitido = false;

foreach ($users as $user)
    if($user['nome'] === $nome && $senha['senha'] === $senha){
        $acesso_permitido = true;
        break;
    ;}
    else{
        echo '<strong>usuário ou senha errado<strong>'
    }
?>