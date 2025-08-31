<?php
$title = "About CyberByte";

ob_start();

require 'views/pages/about.view.php';

$content = ob_get_clean();

require 'views/layout.php';
