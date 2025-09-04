<?php
$db = include '../db.php';

$sql = 'SELECT * FROM products WHERE category = "desktop"';

$results = $db->query($sql);
$desktops = [];

foreach ($results as $row) {
    $desktops[] = $row; // store entire row (associative array)
}

return $desktops;



