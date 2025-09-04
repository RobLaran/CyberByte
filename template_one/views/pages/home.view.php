<!-- Hero Section -->
<section class="hero">
    <div class="hero-text card">
      <h2>Build Your Dream PC</h2>
      <p>Top-quality parts at unbeatable prices.</p>
      <a href="<?php routeTo('/') ?>" class="btn">Shop Now</a>
    </div>
</section>

<!-- Featured Products -->
<section class="products">
  <div class="container">
    <h2>Featured Products</h2>
    <div class="product-grid">
        <?php foreach($featuredProducts as $product): ?>
            <div class="product-card card">
                <img src="<?= $product['image'] ?>" alt="desktop">
                <h3><?= $product['title'] ?></h3>
                <p>₱<?= number_format($product['price'], 2) ?></p>
                <button>Buy</button>
            </div>

        <?php endforeach; ?>
    </div>
  </div>
</section>