<?php
session_start();

// Destrói todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Volta para a tela de login
header("Location: templates/index.php");
exit();