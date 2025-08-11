<div class="sub-header">
    <ul>
        <li class="sub-header-link <?= isURL('/', $basePath) ? 'active' : '' ?>"><a href="<?= routeTo('/') ?>">Home</a></li>
        <li class="sub-header-link  <?= isURL('/desktop', $basePath) ? 'active' : '' ?> "><a href="<?= routeTo('/desktop') ?>">Desktops</a></li>
        <li class="sub-header-link  <?= isURL('/laptop', $basePath) ? 'active' : '' ?> "><a href="<?= routeTo('/laptop') ?>">Laptops</a></li>
    </ul>
</div>
