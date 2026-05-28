<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/auth.php';

?>

<header>
    <nav class="navbar">
        <div class="logo-container">
            <a href="<?= BASE_URL?>/templates/home1.php">
                <img src="https://i.postimg.cc/pVfM6gcQ/Gemini-Generated-Image-vsmi2bvsmi2bvsmi-removebg-preview.png"
                    style="width: 230px; height: 75px;" alt="LOGO" class="logo-header">
            </a>
        </div>
        <div class="menu-header">

            <?php if (isset($_SESSION["logado"])): ?>
                <!-- <a class="login_admin" style="text-decoration: none;" href="{{ url_for('login_admin')}}">Login Admin</a> -->
                <div class="div-sair"><a class="sair" href="<?= BASE_URL?>/logout.php">Sair</a>
                </div>
            <?php endif; ?>

            <a class="nav-logout" href="<?= BASE_URL?>/carrinho.php"> <img
                    src="https://i.postimg.cc/c4KLNG1P/Captura-de-tela-2025-12-08-104543-removebg-preview.png"
                    alt="Carrinho"></a>
        </div>
    </nav>
</header>

<nav>
    <ul class="categoria">
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px; " href="/acessorios"
                tittle="Acessórios"><strong>Acessórios</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/acessorios/capotraste.php">Capotraste</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/acessorios/palhetaguitarra.php">Palheta de Guitarra</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/acessorios/palhetafender.php">Palheta Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px; "
                        href="<?= BASE_URL ?>/templates/instrumentos/acessorios/caseguitarra.php">Case de Guitarra</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/acessorios/caseviolao.php">Case de Violão</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/cordas"><strong>Cordas</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/cordas/cordadaddario.php">Corda Dáddario</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/cordas/cordaelixir.php">Corda Elixir</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/cordas/cordasolez.php">Corda Solez</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/cordas/cordanig.php">Corda NIG</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/cordas/cordaernieball.php">Corda Ernie ball</a></li>

            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/pedais"><strong>Pedais</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/pedais/pedalboss.php">Pedal Boss</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/pedais/pedaldunlop.php">Pedal Dunlop</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/pedais/pedalelectroharmonix.php">Pedal Electro Harmonix</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/pedais/pedaltcelectronic.php">Pedal TC Electronic</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/pedais/pedalmxr.php">Pedal MXR</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/amplificadores"><strong>Amplificadores</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/amplificadores/amplificadorfender.php">Amplificador Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/amplificadores/amplificadormarshall.php">Amplificador Marshall</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/amplificadores/amplificadororange.php">Amplificador Orange</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/amplificadores/amplificadorsheldon.php">Amplificador Sheldon</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/amplificadores/amplificadorvox.php">Amplificador Vox</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/violoes"><strong>Violões</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violoes/violaotakamine.php">Violão Takamine</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violoes/violaomartin.php">Violão Martin</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violoes/violaocort.php">Violão Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violoes/violaogibson.php">Violão Gibson</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violoes/violaotaylor.php">Violão Taylor</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/violinos"><strong>Violinos</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinostentor.php">Violino Stentor</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinoyamaha.php">Violino Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinofiddlerman.php">Violino Fiddlerman</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinocort.php">Violino Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/violinos/violinogliga.php">Violino Gliga</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/guitarras"><strong>Guitarras</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/guitarras/guitarracort.php">Guitarra Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/guitarras/guitarrafender.php">Guitarra Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/guitarras/guitarratagima.php">Guitarra Tagima</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/guitarras/guitarrasuhr.php">Guitarra Suhr</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/guitarras/guitarragretsch.php">Guitarra Gretsch</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/baixos"><strong>Baixos</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baixos/baixofenderjazz.php">Baixo Jazz Bass</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baixos/baixofenderprecision.php">Baixo Precision</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baixos/baixofenderprecision.php">Baixo Ibanez</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baixos/baixoyamahabb.php">Baixo Bb 435</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baixos/baixoyamahasignature.php">Baixo Signature</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/baterias"><strong>Bateria</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baterias/bateriadwdesign.php">Bateria Dw Design</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baterias/bateriapearlmaster.php">Bateria Pearl Master</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baterias/bateriaeletronicaroland.php">Bateria Eletrônica
                        Roland</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baterias/bateriaeletronicazildjian.php">Bateria Eletrônica
                        Zildjian</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/baterias/bateriaeletronicaallmesh.php">Bateria Eletrônica All
                        Mesh</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/teclados"><strong>Teclados</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoyamaha.php">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladosintetizador.php">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladonordstage.php">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoarranjador.php    ">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladocasio.php">Teclado Casio</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/saxofones"><strong>Saxofones</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoyamaha.php">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladosintetizador.php">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladonordstage.php">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoarranjador.php    ">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladocasio.php">Teclado Casio</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/clarinetes"><strong>Clarinetes</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoyamaha.php">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladosintetizador.php">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladonordstage.php">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladoarranjador.php    ">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="<?= BASE_URL ?>/templates/instrumentos/teclados/tecladocasio.php">Teclado Casio</a></li>
            </ul>
        </div>
    </ul>
</nav>