<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/main_header.php'; ?>

     <main class="content">
        <!-- <?= var_dump($_SERVER) ?> -->
        <?= $content ?? '' ?>
     </main>

<?php require 'views/partials/footer.php'; ?>
