<?php

use Vladislav\Registration\Http\Controllers\IndexController;

require __DIR__ .  "/vendor/autoload.php";


$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        $controller = new IndexController();
        $controller->index();
        break;

    default:
        echo "Not found page";
}
