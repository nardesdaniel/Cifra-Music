

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cifra Music</title>
    <link rel="stylesheet" href="../static/style.css">
    <link rel="icon" href="https://i.postimg.cc/j2PNnr8k/Design-sem-nome-(2).png">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Cifra-Music-SA-5.2.1/templates/base.php'; ?>

    <main class="container-home1">

        <div class="slides">
            <img src="https://i.postimg.cc/9fWbfwJ6/cort-guitar.webp" class="slide active">
            <img src="https://i.postimg.cc/Qx2F4vps/ibanez-guitar.webp" class="slide">
            <img src="https://i.postimg.cc/y65xx2r4/yamaha-teclado.webp" class="slide">
            
        </div>

        <section class="welcome">

            <section class="hero">

            </section>

            <br>
        </section>

        <script>
            const slides = document.querySelectorAll(".slide");
            let index = 0;

            function trocarSlide() {
                // remove active da atual
                slides[index].classList.remove("active");

                // vai para o próximo
                index++;

                // se chegou no fim, volta pro início
                if (index >= slides.length) {
                    index = 0;
                }

                // ativa o novo slide
                slides[index].classList.add("active");
            }

            // troca a cada 3 segundos
            setInterval(trocarSlide, 4000);

        </script>

    </main>
   



<footer>
    <div class="titlefooter">

        <div class="redes">
            <img src="https://i.postimg.cc/pVfM6gcQ/Gemini-Generated-Image-vsmi2bvsmi2bvsmi-removebg-preview.png"
                style="width: 230px; height: 75px;" alt="LOGO" class="logo-header">

            <p>
                A loja referência do Brasil em instrumentos musicais,
                a um ano entregando excelência com mais de 10000 mil clientes satisfeitos
            </p>
        </div>

        <ul class="redes-sociais">

            <li class="rede-a">
                <a>Redes sociais</a>
            </li>

            <li class="um">
                <img style="width: 40px; height: 40px; margin-top: 13px; margin-right: 10px;"
                    src="https://i.postimg.cc/pX0h49Wz/zap.webp">
                <img style="width: 40px; height: 40px; margin-top: 13px;"
                    src="https://i.postimg.cc/rpXbkwgm/facebook-icon-free-png.png">
                <a href="https://www.instagram.com/ciframusicofical/">
                    <img style="width: 65px; height: 65px; " src="https://i.postimg.cc/bNf21X6N/icon.webp">
                </a>
            </li>

            <li class="dois">
                <a href="#">

                </a>
            </li>

            <li class="tres">
                <a href="#">

                </a>
            </li>

        </ul>

        <ul class="contato">

            <li class="contato-a">
                <a>Contato</a>
            </li>

            <li class="email">
                <p><img src="https://i.postimg.cc/m2N5Rwv7/gmail.png" alt="">
                    sacciframusic@gmail.com
                </p>
            </li>

        </ul>

        <ul class="horario">

            <li class="horario-a">
                <a>Horario de Funcionamento</a>
            </li>

            <li class="relogio">
                <img src="https://i.postimg.cc/rsvMDQPC/relogio.png" alt="">
                seg a sex das 08:30 h às 12:00 h<br>
                seg a sex das 14:00 h às 17:00 h
            </li>

            <li></li>

        </ul>


    </div>
    <div class="footer-bottom">
        <p style="color: white;">&copy; 2026 Os Pythons. Todos os direitos reservados
        </p>
    </div>

</footer>

</body>

</html>