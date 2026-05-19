<!-- {% extends "base.html" %}

{% block content %}-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../static/style.css">
</head>

<body class="login-body">
    <div class="login-container">
        <h2>Login do Sistema</h2>

        <!-- {% with messages = get_flashed_messages(with_categories=true) %}
        {% if messages %}!-->
        <div class="mensagens">
            <!--    {% for categoria, mensagem in messages %}!-->
            <div class="flash "> <!-- FICA DENTRO DA CLASS {{ categoria }}!-->
                <!--  {{ mensagem }}!-->
                <div class="barra"></div>
            </div>
            <!--  {% endfor %}!-->
        </div>
        <!-- {% endif %}
        {% endwith %} -->

        <!-- Login -->

        <form method="POST" action="login.php">
            <label for="nm_login">Usuário:</label>
            <input type="text" name="nm_login" id="nm_login" required>

            <label for="ds_senha">Senha:</label>
            <input type="password" name="ds_senha" id="ds_senha" required>

            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a class="cadastro-link" href="../templates/usuario.html">Cadastre-se</a></p>
    </div>

    <?php

    if (isset($_GET['erro'])) {

        $mensagem = '';

        if ($_GET['erro'] == 'usuario') {
            $mensagem = "Usuário não encontrado!";
        } elseif ($_GET['erro'] == 'senha') {
            $mensagem = "Senha incorreta!";
        } elseif ($_GET['erro'] == 'expirado') {
            $mensagem = "Sua sessão expirou por inatividade. Faça login novamente.";
        }

        if ($mensagem != '') {
            echo '<div class="erro-login">' . $mensagem . '</div>';
        }
    }
    ?>


    <!-- Script para animação da barra de progresso -->
    <script>
        document.querySelectorAll(".sucesso").forEach(flash => {
            let bar = flash.querySelector(".barra");
            let width = 0;

            let timer = setInterval(() => {
                width++;
                bar.style.width = width + "%";

                if (width >= 100) {
                    clearInterval(timer);
                    flash.style.transition = "0.4s";
                    flash.style.opacity = 0;
                    setTimeout(() => flash.remove(), 400);
                }
            }, 40); // tempo (40 = ~4 segundos)
        });

        document.querySelector(".flash").forEach(flash => {
            let progress = flash.querySelector();

        })


    </script>
</body>

</html>

<!--{% endblock %}-->