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
 * @param string $pageTitle
 * @return void
 */
function setRoute(string $route, string $fileName, string $pageTitle = ''): void
{
    global $routes, $app_url;

    $route = $app_url . trim($route);
    $routes[$route]['path'] = './View/' . $fileName;
    $routes[$route]['pageTitle'] = $pageTitle;
}

/**
 * Mostra o conteúdo para a rota
 * @param string $route
 * @return void
 */
function loadRoute($route): void
{
    global $routes, $app_url;

    $route = trim($route);

    if (array_key_exists($route, $routes)) {
        $path = $routes[$route]['path'] . '.php';
        require $path;
        return;
    }

    require $routes[$app_url . '404']['path'] . '.php';
}

/**
 * Retorna o meta-título da rota especificada
 * @param string $route
 * @return string
 */
function fetchRouteTitle($route): string
{
    global $routes, $app_url;

    if (array_key_exists($route, $routes)) {
        $pageTitle = $routes[$route]['pageTitle'];
        return !empty($pageTitle) ? ' | ' . $pageTitle : '';
    }

    return ' | ' . $routes[$app_url . '404']['pageTitle'];
}
