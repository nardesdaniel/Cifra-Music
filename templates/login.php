<?php
session_start();
require_once "../conexao.php"; // arquivo da conexão PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = trim($_POST['nm_login'] ?? '');
    $senha = trim($_POST['ds_senha'] ?? '');

    // Buscar usuário no banco
    $sql = "SELECT id, nm_login, ds_senha
            FROM tb_usuario 
            WHERE nm_login = ?";


    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se encontrou usuário
    if ($usuario) {

        // Verifica senha criptografada
        if (password_verify($senha, $usuario['ds_senha'])) {

            //  Criar variáveis de sessão
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nm_login'] = $usuario['nm_login'];
            $_SESSION['logado'] = true;

            // Redireciona para a listagem de usuários
            header("Location: index.php");
            exit();

        } else {
            // senha incorreta
            header("Location: index.php?erro=senha");
            exit();
        }

    } else {
        // usuário não encontrado
        header("Location: index.php?erro=usuario");
        exit();
    }
}
?>