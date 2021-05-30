<?php

require_once __DIR__.'/../vendor/autoload.php';

use Bramus\Router\Router;

$router = new Router;
$router->setNamespace('\App\Controller');

$router->get('/','UserController@home');
$router->post('/','UserController@home');
$router->get('/product/{id}','ProductController@productToFetch');
$router->post('/product/{id}','ProductController@productToFetch');

$router->run();
