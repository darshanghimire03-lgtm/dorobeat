<?php
// Dorobeat Vercel PHP entry point.
$homepage = dirname(__DIR__) . '/index.php';

if (!is_file($homepage)) {
    http_response_code(500);
    echo 'Dorobeat error: homepage file not found.';
    exit;
}

require $homepage;