<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
</head>

<body class="cadastro-body">

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/templates/base.php'; ?>

    <div class="cadastro-container">


        <section class="form-section">
            <h2>Cadastro de Usuários Admin</h2>

            <form method="POST" class="form-card">

                <label for="nm_usuario">Seu Nome:</label>
                <input type="text" id="nm_usuario" name="nm_usuario" required>

                <label for="nm_login">Usuário:</label>
                <input type="text" id="nm_login" name="nm_login" required>

                <label for="ds_senha">Senha:</label>
                <input type="password" id="ds_senha" name="ds_senha" required>

                <button type="submit" class="btnsalvar">Salvar</button>

            </form>
        </section>
        <p>Já tem uma conta? <a class="login-link" href="">Faça login</a></p>
    </div>


</body>

</html>