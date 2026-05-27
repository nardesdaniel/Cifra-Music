
<header>
    
        <nav class="navbar">
            <div class="logo-container">
                <a href="/">
                    <img src="https://i.postimg.cc/pVfM6gcQ/Gemini-Generated-Image-vsmi2bvsmi2bvsmi-removebg-preview.png"
                        style="width: 230px; height: 75px;" alt="LOGO" class="logo-header">
                </a>
            </div>
            <div class="menu-header">

                <?php if (isset($_SESSION["logado"])): ?>
                    <!-- <a class="login_admin" style="text-decoration: none;" href="{{ url_for('login_admin')}}">Login Admin</a> -->
                    <div class="div-sair"><a class="sair" href="../logout.php">Sair</a>
                    </div>
                <?php endif; ?>

                <a class="nav-logout" href="/carrinho"> <img
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
                        href="instrumentos/acessorios/capotraste.php">Capotraste</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('acessorio_modelo', modelo='palhetaguitarra') }}">Palheta de Guitarra</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('acessorio_modelo', modelo='palhetafender') }}">Palheta Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px; "
                        href="{{ url_for('acessorio_modelo', modelo='caseguitarra') }}">Case de Guitarra</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('acessorio_modelo', modelo='caseviolao') }}">Case de Violão</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/cordas"><strong>Cordas</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('corda_modelo', modelo ='daddario') }}">Corda Dáddario</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('corda_modelo', modelo ='elixir') }}">Corda Elixir</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('corda_modelo', modelo ='solez') }}">Corda Solez</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('corda_modelo', modelo ='nig') }}">Corda NIG</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('corda_modelo', modelo ='ernieball') }}">Corda Ernie ball</a></li>

            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/pedais"><strong>Pedais</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('pedal_modelo', modelo ='boss') }}">Pedal Boss</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('pedal_modelo', modelo ='dunlop') }}">Pedal Dunlop</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('pedal_modelo', modelo ='electro_harmonix') }}">Pedal Electro Harmonix</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('pedal_modelo', modelo ='tc_electronic') }}">Pedal TC Electronic</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('pedal_modelo', modelo ='mxr') }}">Pedal MXR</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/amplificadores"><strong>Amplificadores</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('amplificador_modelo', modelo ='fender') }}">Amplificador Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('amplificador_modelo', modelo ='marshall') }}">Amplificador Marshall</a>
                </li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('amplificador_modelo', modelo ='orange') }}">Amplificador Orange</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('amplificador_modelo', modelo ='sheldon') }}">Amplificador Sheldon</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('amplificador_modelo', modelo ='vox') }}">Amplificador Vox</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/violoes"><strong>Violões</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violao_modelo', modelo ='takamine') }}">Violão Takamine</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violao_modelo', modelo ='martin') }}">Violão Martin</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violao_modelo', modelo ='cort') }}">Violão Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violao_modelo', modelo ='gibson') }}">Violão Gibson</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violao_modelo', modelo ='taylor') }}">Violão Taylor</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/violinos"><strong>Violinos</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violino_modelo', modelo ='stentor') }}">Violino Stentor</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violino_modelo', modelo ='yamaha') }}">Violino Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violino_modelo', modelo ='fiddlerman') }}">Violino Fiddlerman</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violino_modelo', modelo ='cort') }}">Violino Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('violino_modelo', modelo ='gliga') }}">Violino Gliga</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/guitarras"><strong>Guitarras</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('guitarra_modelo', modelo ='cort') }}">Guitarra Cort</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('guitarra_modelo', modelo ='fender') }}">Guitarra Fender</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('guitarra_modelo', modelo ='tagima') }}">Guitarra Tagima</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('guitarra_modelo', modelo ='suhr') }}">Guitarra Suhr</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('guitarra_modelo', modelo ='gretsch') }}">Guitarra Gretsch</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/baixos"><strong>Baixos</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('baixo_modelo', modelo ='fenderjazz') }}">Baixo Jazz Bass</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('baixo_modelo', modelo ='fenderprecision') }}">Baixo Precision</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('baixo_modelo', modelo ='ibanez') }}">Baixo Ibanez</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('baixo_modelo', modelo ='yamahabb') }}">Baixo Bb 435</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('baixo_modelo', modelo ='yamahasignature') }}">Baixo Signature</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/baterias"><strong>Bateria</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('bateria_modelo', modelo ='dw_design') }}">Bateria Dw Design</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('bateria_modelo', modelo ='pearl_master') }}">Bateria Pearl Master</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('bateria_modelo', modelo ='eletronica_roland') }}">Bateria Eletrônica
                        Roland</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('bateria_modelo', modelo ='eletronica_zildjian') }}">Bateria Eletrônica
                        Zildjian</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('bateria_modelo', modelo ='eletronica_all_mesh') }}">Bateria Eletrônica All
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
                        href="{{ url_for('teclado_modelo', modelo ='yamaha') }}">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='sintetizador') }}">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='nordstage') }}">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='arranjador') }}">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='casio') }}">Teclado Casio</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/saxofones"><strong>Saxofones</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='yamaha') }}">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='sintetizador') }}">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='nordstage') }}">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='arranjador') }}">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='casio') }}">Teclado Casio</a></li>
            </ul>
        </div>
        <div class="open-menu">
            <a class="a_open-menu" style="text-decoration: none; padding: 26px 0px;"
                href="/clarinetes"><strong>Clarinetes</strong></a>
            <img src="https://i.postimg.cc/2SvJXtwS/Pngtree-arrow-down-glyph-black-icon-4008270.png" alt=""
                style="width: 10px;">

            <ul class="sub-menu">
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='yamaha') }}">Teclado Yamaha</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='sintetizador') }}">Teclado Sintetizador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='nordstage') }}">Teclado Nord Stage</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='arranjador') }}">Teclado Arranjador</a></li>
                <li><a class="sub-cort" style="text-decoration: none; margin-top: 10px;"
                        href="{{ url_for('teclado_modelo', modelo ='casio') }}">Teclado Casio</a></li>
            </ul>
        </div>
    </ul>
</nav>






