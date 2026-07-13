<?php

function dispatch()
{
    $routes = require dirname(__DIR__, 2) . '/routes/routes.php';


    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $uri = rtrim($uri, '/');

    if ($uri === '') {
        $uri = '/';
    }
   

    if (isset($routes[$uri])) {


        $route = $routes[$uri];


        $controller = $route['controller'];

        $action = $route['action'];


        $controllerFile = dirname(__DIR__) . '/controllers/' . $controller . '.controller.php';


        if (file_exists($controllerFile)) {


            require_once $controllerFile;


            if (function_exists($action)) {

                $action();

            } else {

                echo "Action introuvable";

            }


        } else {

            echo "Contrôleur introuvable";

        }


    } else {


        http_response_code(404);

        echo "Page introuvable";

    }

}