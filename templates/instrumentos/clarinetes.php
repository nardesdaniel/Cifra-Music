<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
    <title>Clarinetes</title>
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/templates/base.php'; ?>
    <div class="cards-container">

        <div class="card">
            <img src="" alt="Violão 1">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="{{ url_for('clarinete_modelo', modelo='yamaha') }}">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 2">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="{{ url_for('clarinete_modelo', modelo='buffet') }}">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 3">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="{{ url_for('clarinete_modelo', modelo='selmer') }}">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 4">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="{{ url_for('clarinete_modelo', modelo='cannonball') }}">Comprar</a></button>
        </div>

        <div class="card">
            <img src="" alt="Violão 5">
            <h3></h3>
            <p></p>
            <h2 class="precoViolao">R$ </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="{{ url_for('clarinete_modelo', modelo='jupiter') }}">Comprar</a></button>
        </div>
    </div>
</body>

</html>