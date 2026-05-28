<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
  <title>Case de Violão</title>
</head>

<body>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/templates/base.php'; ?>

  <script>
    function changeImage(element) {
      // trocar imagem principal
      document.getElementById("mainImg").src = element.src;

      // destacar miniatura ativa
      document.querySelectorAll(".thumb").forEach(img => img.classList.remove("active"));
      element.classList.add("active");
    }
  </script>

  <div class="gallery" style="justify-content: center; height: 600px;">


    <div class="main-image">
      <img id="mainImg" src="https://i.postimg.cc/jS0QZKqC/casev.webp">
    </div>

    <div class="product-info">
      <h1 class="product-title">Case de violão almodada</h1>

      <div class="ratings">
        <div class="review-summary">
          ★★★★★ <span id="avgRating">0.0</span>
          (<span id="totalReviews">0</span> avaliações)
        </div>
      </div>

      <div class="price-block">
        <span class="price-current">R$ 2.999,90</span>
        <span class="price-installments">Em até 10x sem juros</span>

        <a class="btn-whatsapp" target="_blank"
          href="https://wa.me/5599999999999?text=Olá!%20Tenho%20interesse%20no%20Violão%20Takamine%20FT340%20BS.">
          Comprar pelo WhatsApp
        </a>
        <button class="btn-cart" onclick="addToCart()">
          Adicionar ao Carrinho
        </button>
      </div>
    </div>
  </div>

  <div class="txt">
    <h1 style="display: flex; justify-content: center; margin-top: 30px;" class="detalhes"><br>Descrição</h1>
    <h2>Case de violão almofadada</h2>

    <p style="margin-left: 500px; margin-right: 500px;">Case para Violão APX GC-APX GATOR

      Revestimento externo duro moldado a partir de plástico ABS resistente ao impacto para um exterior ultra-durável. O
      forro de espuma e pelúcia EPS fornece um interior protetor de segurança contra cortes e arranhões.
      Espaçoso compartimento de armazenamento interno oferece esconderijos seguros para capos, cordas, palhetas e
      acessórios</p>

    <h1 class="especificacoes">Especificações técnicas:</h1>

    <ul>
      <li>Modelo: Gator</li>
      <li>Categoria: acessorios</li>
      <li>Cor: Preto</li>
      <li>Forma do corpo: APX</li>
    </ul>

    <h2>Fotos do Produto</h2>

    <div class="img-descricao">
      <img style="width: 500px; height: 500px; margin-bottom: 20px;" src="https://i.postimg.cc/jS0QZKqC/casev.webp">
    </div>
  </div>

  <br>

  <div class="review-section" data-page-id="caseviolao">
    <h2>Avaliações de clientes</h2>

    <div class="review-summary">
      ⭐ <span id="topAvgRating">0.0</span>
      (<span id="topTotalReviews">0</span> avaliações)
    </div>

    <div class="review-form">
      <div id="starContainer" class="star-rating" aria-label="Escolha a nota">
        <span data-value="1">★</span>
        <span data-value="2">★</span>
        <span data-value="3">★</span>
        <span data-value="4">★</span>
        <span data-value="5">★</span>
      </div>

      <input type="text" class="review-input" id="reviewText" placeholder="Seu comentário..."></input><br>
      <button class="btn-review" id="submitReview">Enviar Avaliação</button>

    </div>

    <div style="align-items: end;" class="comentarios">
      <h3>Comentários</h3>
      <div id="reviewsList" aria-live="polite"></div>
    </div>

  </div>

  <script src="<?= BASE_URL ?>/static/avaliacao.js"></script>

  <!-- SCRIPT DO CARRINHO -->
  <script>
    function addToCart() {
      const product = {
        id: "caseviolao",
        name: "Case de violão almodada",
        price: 2999.90,
        image: "https://i.postimg.cc/jS0QZKqC/casev.webp",
        qty: 1
      };

      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      let existing = cart.find(item => item.id === product.id);

      if (existing) {
        existing.qty += 1;
      } else {
        cart.push(product);
      }

      localStorage.setItem("cart", JSON.stringify(cart));

      alert("Produto adicionado ao carrinho!");
    }
  </script>

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