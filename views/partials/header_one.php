<header>
    <div class="header-container wrapper">
            <a href="<?= routeTo('/') ?>">
                <img src="<?= $config['logo_one'] ?>" alt="" class="logo">
                <span class="dev"><?= $config['dev'] ?></span>
            </a>

            <div class="search-input-container">
                <input type="text" name="" id="search-input">
                <button type="button" class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

            <div class="nav-icon-container">
                <ul class="nav-icons">
                    <li class="nav-icon-link login <?= isURL('/about', $basePath) ? 'active' : '' ?>">
                        <a href="<?= routeTo('/about') ?>">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                    </li>
                    <li class="nav-icon-link contact <?= isURL('/contact', $basePath) ? 'active' : '' ?>">
                        <a href="<?= routeTo('/contact') ?>">
                            <i class="fa-regular fa-phone"></i>
                        </a>
                    </li>
                    <li class="nav-icon-link login <?= isURL('/login', $basePath) ? 'active' : '' ?>">
                        <a href="<?= routeTo('/login') ?>">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </li>
                </ul>

            </div>
    </div>
</header>





