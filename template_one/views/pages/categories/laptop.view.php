<section class="products">
  <div class="container">
    <h2><?= $title ?></h2>
    <div class="product-grid">
        <?php foreach($laptops as $laptop): ?>
            <div class="product-card card">
                <img src="<?= $laptop['image'] ?>" alt="desktop">
                <h3><?= $laptop['title'] ?></h3>
				<p>₱<?= number_format($laptop['price'], 2) ?></p>
                <button>Buy</button>
            </div>

        <?php endforeach; ?>
    </div>
  </div>
</section>