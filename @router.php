<?php
// @router.php
// php -S localhost:8000 @router.php

// Serve existing files as-is
if (file_exists(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Try appending ".php" to the request
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim(ltrim($path, '/'), '/');
$phpFile = __DIR__ . '/' . $path . '.php';

if (file_exists($phpFile)) {
    require $phpFile;
    exit;
}

// If nothing found, serve 404
http_response_code(404);
require __DIR__ . '/404.php';
