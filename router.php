<?php

/**
 * Url raiz da aplicação
 */
const APP_URL = '/ShipMaintainer/';

/**
 * Armazena as rotas
 * @var array $routes
 */
$routes = [];

/**
 * Registra uma nova rota em $routes
 * @param string $route
 * @param string $fileName
 * @return void
 */
function setRoute(string $route, string $fileName): void
{
    global $routes;

    $route = APP_URL . trim($route);
    $routes[$route] = './View/' . $fileName;
}

/**
 * Mostra o conteúdo para a rota
 * 
 * @param string $route
 * @return void
 */
function goToRoute($route): void
{
    global $routes;

    $route = trim($route);
    $path = $routes[$route];

    require $path . '.php';
}
