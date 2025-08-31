<?php
$title = "Home";

ob_start();
require '../data/featuredProducts.php';
require 'views/pages/home.view.php';

$content = ob_get_clean();

require 'views/layout.php';
