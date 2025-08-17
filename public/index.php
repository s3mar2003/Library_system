<?php

// Simple PSR-4-ish autoloader for App\*
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});



// Create router and include all routes
$router = new App\Core\Router();
require __DIR__ . '/../routes/web.php';

// Dispatch current request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);