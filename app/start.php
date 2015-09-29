<?php
// Load Slim Framework
session_start();
require '../vendor/autoload.php';

// App
$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

// Database
$app->container->singleton('db', function(){
    return new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root', 'root');
});

// Set tmp dir
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

// Routes
require 'routs.php';