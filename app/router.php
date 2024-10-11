<?php

$routes = [
    "" => ["controller" => "PageController", "action" => "showIndex"],
    "event" => ["controller" => "PageController", "action" => "showTickets"],
];

function route($url, $routes)
{
    $url = parse_url($url, PHP_URL_PATH);
    $url = trim($url, "/");

    if (array_key_exists($url, $routes)) {
        $action = $routes[$url]["action"];
        $controllerName = $routes[$url]["controller"];

        require_once(__DIR__ . "/controllers/$controllerName.php");

        $controller = new $controllerName();

        if (method_exists($controller, $action)) {
            return $controller->$action();
        } else {
            throw new Exception("Método $action no existe en el controlador $controllerName");
        }
    } else {
        http_response_code(404);
        echo "404 - Página no encontrada";
    }
}
