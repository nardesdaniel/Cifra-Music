<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CIFRA-MUSIC-MAIN/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>/static/style.css">
  <title>Bateria Eletrônica All Mesh</title>
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

    <div class="thumbnails">
      <img src="https://i.postimg.cc/KYDrhhcQ/Bateria-Eletronica-All-Mesh.webp" class="thumb active"
        onclick="changeImage(this)">
      <img src="https://i.postimg.cc/FRFb9C1g/Bateria-Eletronica-All-Mesh-2.webp" class="thumb"
        onclick="changeImage(this)">
      <img src="https://i.postimg.cc/Tw2jRNhk/Bateria-Eletronica-All-Mesh-3.webp" class="thumb"
        onclick="changeImage(this)">
      <img src="https://i.postimg.cc/vB87Q2cb/Bateria-Eletronica-All-Mesh-4.webp" class="thumb"
        onclick="changeImage(this)">
      <img src="https://i.postimg.cc/9MxdzP7f/Bateria-Eletronica-All-Mesh-5.webp" class="thumb"
        onclick="changeImage(this)">

    </div>

    <div class="main-image">
      <img id="mainImg" src="https://i.postimg.cc/KYDrhhcQ/Bateria-Eletronica-All-Mesh.webp">
    </div>

    <div class="product-info">
      <h1 class="product-title">Bateria Eletrônica All Mesh</h1>

      <div class="ratings">
        <div class="review-summary">
          ★★★★★ <span id="avgRating">0.0</span>
          (<span id="totalReviews">0</span> avaliações)
        </div>
      </div>

      <div class="price-block">
        <span class="price-current">R$ 332,99</span>
        <span class="price-installments">Em até 10x sem juros</span>

        <a class="btn-whatsapp" target="_blank"
          href="https://wa.me/5547984234968?text=Olá!%20Tenho%20interesse%20no%20Violão%20Takamine%20FT340%20BS.">
          Comprar pelo WhatsApp
        </a>
        <button class="btn-cart" onclick="addToCart()">
          Adicionar ao Carrinho
        </button>
      </div>
    </div>
  </div>

  <div class="txt">
    <span class="detalhes">Detalhes do Produto</span>
    <h3>Bateria Eletrônica All Mesh</h3>
    <p>A Bateria Eletrônica All Mesh é uma excelente escolha para músicos que buscam qualidade e versatilidade.
      <br>
      Com um som realista e uma construção durável, ela oferece uma experiência de toque excepcional. <br>
      Perfeita para estúdios e apresentações ao vivo.
    </p>
  </div>

  <br>

  <div class="review-section" data-page-id="bateriaeletronicaallmesh">
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
        id: "bateriaeletronicaallmesh",
        name: "Bateria Eletrônica All Mesh",
        price: 332.99,
        image: "https://i.postimg.cc/KYDrhhcQ/Bateria-Eletronica-All-Mesh.webp",
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

</body>

</html>