<?php
session_start();

$basePath = dirname($_SERVER['SCRIPT_NAME']); // Change if your app is in a subdirectory
require 'functions.php';
require 'config.php';


if (!isset($_SESSION['template'])) {
    $_SESSION['template'] = 'one'; // default template
}

if (isset($_GET['change_template'])) {
    $_SESSION['template'] = $_SESSION['template'] === 'one' ? 'two' : 'one';
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?')); // redirect to remove query
    exit;
}

$uri = getURI($basePath);

switch ($uri) {
    case '/':
    case '/home':
        require 'controllers/home.php';
        break;

    case '/desktops':
        require 'controllers/desktop.php';
        break;

    case '/laptops':
        require 'controllers/laptop.php';
        break;

    case '/about':
        require 'controllers/about.php';
        break;

    case '/contact':
        require 'controllers/contact.php';
        break;

    case '/login':
        require 'controllers/login.php';
        break;

    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}

?>