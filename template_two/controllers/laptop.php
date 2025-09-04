<?php
$laptops = require '../data/laptop.php';

$title = "Laptops";

ob_start();

require 'views/pages/categories/laptop.view.php';

$content = ob_get_clean();

require 'views/layout.php';
