<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Redirect the request to the correct file in the public directory if it exists
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Load Laravel's entry point (index.php)
require_once __DIR__.'/public/index.php';
