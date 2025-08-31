<div class="sub-header">
    <ul>
        <li class="sub-header-link <?= isURL('/', $basePath) ? 'active' : '' ?>"><a href="<?= routeTo('/') ?>">Home</a></li>
        <li class="sub-header-link  <?= isURL('/desktops', $basePath) ? 'active' : '' ?> "><a href="<?= routeTo('/desktops') ?>">Desktops</a></li>
        <li class="sub-header-link  <?= isURL('/laptops', $basePath) ? 'active' : '' ?> "><a href="<?= routeTo('/laptops') ?>">Laptops</a></li>
    </ul>
</div>
