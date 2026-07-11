<?php
// Dev router for PHP's built-in server (`php -S ... router.php`).
// Apache ignores this file — its equivalent rules live in .htaccess.
// Keep the two in sync.

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve real files (assets, *.php accessed directly) as-is.
if ($uri !== '/' && is_file(__DIR__.$uri)) {
    return false;
}

// Pretty blog URLs: /blogue/<slug> -> blogue.php?article=<slug>
if (preg_match('#^/blogue/([^/]+)/?$#', $uri, $m)) {
    $_GET['article'] = $m[1];
    require __DIR__.'/blogue.php';
    return true;
}

// Blog index: /blogue -> blogue.php (no article -> listing)
if (preg_match('#^/blogue/?$#', $uri)) {
    require __DIR__.'/blogue.php';
    return true;
}

// Everything else (including "/") -> let the built-in server handle it,
// which serves index.php for the document root.
return false;
