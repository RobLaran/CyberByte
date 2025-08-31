<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/sub_header.php'; ?>

     <main class="content">
        <!-- <?= var_dump($_SERVER) ?> -->
        <?= $content ?? '' ?>
     </main>

<?php require 'views/partials/footer.php'; ?>
