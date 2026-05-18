<?php

$host = "localhost";
$dbname = "cifra_music_cadastro";
$usuario = "root";
$senha = "";
$porta = 3306;


try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}



?>