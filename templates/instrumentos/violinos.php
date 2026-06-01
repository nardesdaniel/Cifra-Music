<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
    <title>Violinos</title>
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/templates/base.php'; ?>
    <div class="cards-container">

        <div class="card">
            <img src="https://i.postimg.cc/x8YKYKK5/violino-stentor.webp" alt="Violão 1">
            <h3>Violino Arco Breu Cavalete <br> Acústico 4/4 Madeira Com Estojo</h3>
            <p></p>
            <h2 class="precoViolao">R$ 254,99</h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinostentor.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 2">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinoyamaha.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 3">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinofiddlerman.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 4">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinocort.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 5">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinogliga.php">Comprar</a></button>
        </div>
    </div>
</body>

</html>