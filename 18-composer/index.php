<?php

include 'vendor/autoload.php';

$router = new App\Router;

$router->add('foo', 'GET', 'FooController@index');
$router->add('foo', 'POST', 'FooController@create');
$router->add('bar', 'GET', 'BarController@index');
$router->add('contact', 'GET', 'FooController@index');

$router->fetch();
