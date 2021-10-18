<?php
require "./../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ . '/../' );
$dotenv->load();

$router = new App\Router\Router();
$router->run();