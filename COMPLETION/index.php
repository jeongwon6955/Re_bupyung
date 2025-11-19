<?php
$route = $_GET['route'] ?? 'user/home';
list($controllerName, $method) = explode('/', $route);

$controllerClass = ucfirst($controllerName).'Controller';
require_once "App/Controllers/$controllerClass.php";

$controller = new $controllerClass;
$controller->$method();
