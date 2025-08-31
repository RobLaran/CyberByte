<?php
$title = "Contact Us";

ob_start();

require 'views/pages/contact.view.php';

$content = ob_get_clean();

require 'views/layout.php';
