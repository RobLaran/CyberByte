<?php
$db = include '../db.php';

$sql = 'SELECT * FROM products WHERE category = "laptop"';

$results = $db->query($sql);
$laptops = [];

foreach ($results as $row) {
    $laptops[] = $row; // store entire row (associative array)
}

return $laptops;

