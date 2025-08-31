<section class="products">
  <div class="container">
    <h2><?= $title ?></h2>
    <div class="product-grid">
        <?php foreach($desktops as $desktop): ?>
          
            <div class="product-card card">
                <img src="<?= $desktop->imgURL ?>" alt="desktop">
                <h3><?= $desktop->title ?></h3>
                <p>₱<?= number_format($desktop->price, 2) ?></p>
                <button>Buy</button>
            </div>

        <?php endforeach; ?>
    </div>
  </div>
</section>