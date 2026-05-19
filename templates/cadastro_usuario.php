<?php

require_once "../conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nm_usuario"];
    $login = $_POST['nm_login'];
    $senha = $_POST['ds_senha'];

    // 🔒 Criptografar senha (IMPORTANTE)
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // SQL de INSERT
    $sql = "INSERT INTO tb_usuario (nm_usuario, nm_login, ds_senha)
            VALUES (:nome, :login, :senha)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":login", $login);
    $stmt->bindValue(":senha", $senhaHash);
    
    $stmt->execute();

    // depois do cadastro, manda para login
    header("Location: index.php?sucesso=cadastro");
    exit();
}
?>