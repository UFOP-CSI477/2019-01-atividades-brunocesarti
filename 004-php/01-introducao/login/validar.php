<?php

$user = $_POST['usuario'];
$password = $_POST['senha'];

// echo "POST";
// var_dump($_POST);

// echo "GET";
// var_dump($_GET;

// conexao ou recuperacao com DB
// submeter os dados ao model

// controller
// validar

if ($user == "admin" && $password="123456") {
    echo "<h1>Seja bem-vinda(o) $user ! <Qh1>";
    echo "<p>Senha: $password";
}else{
    echo "<h1>Usuário e/ou senha inválidos!</h1>";
}
echo "<a href=\"index.php\"><BR>Voltar</a>";
