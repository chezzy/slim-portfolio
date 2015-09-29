<?php
// Load Slim Framework
session_start();
require '../vendor/autoload.php';

// App
$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

// Set tmp dir
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

// Test
$app->get('/', function(){
    echo 'Hello';
});