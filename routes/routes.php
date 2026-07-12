<?php

$routes = [

    '/' => [
        'controller' => 'home',
        'action' => 'index'
    ],

    '/login' => [
        'controller' => 'auth',
        'action' => 'login'
    ],

    '/logout' => [
        'controller' => 'auth',
        'action' => 'logout'
    ]

];

return $routes;