<?php
function getURI($basePath) {
    return str_replace($basePath, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}

 function isURL($URL, $basePath) {
    $PATH = getURI($basePath);

    return  $PATH == $URL;
}

function routeTo($endPoint) {
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    return $basePath . $endPoint;
}