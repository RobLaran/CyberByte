<header>
  <div class="header-container wrapper">
    <!-- Logo -->
    <a href="<?= routeTo('/') ?>" class="logo-section">
      <img src="<?= $config['logo_two'] ?>" alt="Logo" class="logo">
      <span class="dev"><?= $config['dev'] ?></span>
    </a>

    <!-- Main Navigation -->
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li class="<?= isURL('/', $basePath) ? 'active' : '' ?>">
          <a href="<?= routeTo('/') ?>">Home</a>
        </li>

        <!-- Categories Dropdown -->
        <li class="dropdown <?= (isURL('/desktops', $basePath) || isURL('/laptops', $basePath)) ? 'active' : '' ?>">
          <a href="#">Categories ▾</a>
          <ul class="dropdown-menu">
            <li><a href="<?= routeTo('/desktops') ?>">Desktops</a></li>
            <li><a href="<?= routeTo('/laptops') ?>">Laptops</a></li>
          </ul>
        </li>

        <li class="<?= isURL('/about', $basePath) ? 'active' : '' ?>">
          <a href="<?= routeTo('/about') ?>">About</a>
        </li>
        <li class="<?= isURL('/contact', $basePath) ? 'active' : '' ?>">
          <a href="<?= routeTo('/contact') ?>">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Search & Icons -->
    <div class="nav-right">
      <div class="search-input-container">
        <input type="text" id="search-input" placeholder="Search...">
        <button type="button" class="search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
      <ul class="nav-icons">
        <li class="<?= isURL('/login', $basePath) ? 'active' : '' ?>">
          <a href="<?= routeTo('/login') ?>"><i class="fa-regular fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</header>
