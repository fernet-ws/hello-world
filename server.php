<?php

$file = __DIR__ . '/public' . strstr($_SERVER["REQUEST_URI"] . '?', '?', true);
if (file_exists($file) && is_file($file)) {
    return false;
}

require 'public/index.php';
