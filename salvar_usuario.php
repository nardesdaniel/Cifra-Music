<?php
require "conexao.php";

$nome   = $_POST['nm_usuario'];
$login  = $_POST['nm_login'];
$senha  = $_POST['ds_senha'];


// CRIPTOGRAFAR SENHA (bcrypt automático)
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);


// Inserir no banco
$sql = "INSERT INTO tb_usuario 
        (nm_usuario, nm_login, ds_senha)
        VALUES (:nome, :login, :senha)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":login", $login);
$stmt->bindValue(":senha", $senhaCriptografada);

$stmt->execute();

echo "<h2>Usuário cadastrado com sucesso!</h2>";
echo "<a href='lista-usuarios.php'>Voltar</a>";
?>