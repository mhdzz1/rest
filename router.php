<?php
// Custom router for PHP built-in server
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri === '/admin' || $uri === '/dashboard') {
    require 'dashboard.html';
    exit;
}
// Serve static files as usual
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}
// Fallback to index.html or 404
if ($uri === '/' || $uri === '/index.html') {
    require 'index.html';
    exit;
}
http_response_code(404);
echo '404 Not Found';