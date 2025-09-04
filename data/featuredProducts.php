<?php
$desktops = require 'desktop.php';
$laptops = require 'laptop.php';

$featuredProducts = [
    $desktops[0],
    $laptops[2],
    $desktops[4],
    $laptops[4]
];

return $featuredProducts;