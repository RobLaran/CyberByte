<?php
$title = "Home";

$featuredProducts = require '../data/featuredProducts.php';

ob_start();

require 'views/pages/home.view.php';

$content = ob_get_clean();

require 'views/layout.php';
