<?php

/**
 * Url raiz da aplicação
 * @var string $app_url
 */
$app_url = getenv('APP_URL');

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
    global $routes, $app_url;

    $route = $app_url . trim($route);
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
    global $routes, $app_url;

    $route = trim($route);

    if (array_key_exists($route, $routes)) {
        $path = $routes[$route] . '.php';
        require $path;
        return;
    }

    require $routes[$app_url . 'nada_aqui'] . '.php';
}
