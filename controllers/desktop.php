<?php
require 'data/desktop.php';

$title = "Desktops";

ob_start();

require 'views/pages/categories/desktop.view.php';

$content = ob_get_clean();

require 'views/layout.php';


