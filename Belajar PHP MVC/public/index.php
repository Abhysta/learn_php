<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Abhysta\BelajarMvcPhp\App\Router;
use Abhysta\BelajarMvcPhp\Controller\HomeController;
use Abhysta\BelajarMvcPhp\Controller\ProductController;
use Abhysta\BelajarMvcPhp\Middleware\AuthMiddleware;

Router::add("GET", "/product/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductController::class, "categories");

Router::add("GET", "/tes", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "index", [AuthMiddleware::class]);

Router::run();
