<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
    <title>Violões</title>
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/templates/base.php'; ?>

    <div class="cards-container">

        <div class="card">
            <img src="https://i.postimg.cc/8cHnDTF6/violao1-Photoroom.png" alt="Violão 1">
            <h3>Violão Elétrico Takamine FT340 BS</h3>
            <p>Violão elétroacustico, profissional</p>
            <h2 class="precoViolao">R$ 13.290,50</h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/violoes/violaotakamine.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="https://i.postimg.cc/2yGC1q97/violao2-Photoroom-(1).png" alt="Violão 2">
            <h3>Violão Martin D-X2E Natural <br>X Series Eletroacústico Aço</h3>
            <p>Som mais encorpado e timbre marcante</p>
            <h2 class="precoViolao">R$ 8.999,10 </h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/violoes/violaomartin.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="https://i.postimg.cc/T3pTP3VW/violao3-Photoroom.png" alt="Violão 3">
            <h3>Violão Aço Folk Cort Earth 100SSF Sb Sunburst</h3>
            <p>Para palco e estúdio.</p>
            <h2 class="precoViolao">R$ 3.239,10</h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/violoes/violaocort.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="https://i.postimg.cc/BnDwNWsC/violao4-Photoroom.png" alt="Violão 4">
            <h3>Violão Gibson SJ-200 2018 Vintage Sunburst</h3>
            <p>Muito estético e com um timbre brilhante</p>
            <h2 class="precoViolao">R$ 35.225,77</h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/violoes/violaogibson.php">Comprar</a></button>
        </div>

        <div class="card">
            <img src="https://i.postimg.cc/MKVxgFY6/violao5-Photoroom.png" alt="Violão 5">
            <h3>Violao Taylor 314Ce Eletro-Acustico Grand Auditorium</h3>
            <p>Para palco e estúdio.</p>
            <h2 class="precoViolao">R$ 28.458,04</h2>
            <button class="buttonViolao"><a class="aViolao" style="text-decoration: none;"
                    href="<?= BASE_URL ?>/violoes/violaotaylor.php">Comprar</a></button>
        </div>

    </div>
</body>

</html>