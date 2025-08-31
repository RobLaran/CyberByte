<?php
$title = "Login";

ob_start();

require 'views/pages/login.view.php';

$content = ob_get_clean();

require 'views/layout.php';
