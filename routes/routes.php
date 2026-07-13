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
    ],
    '/gerant/dashboard' => [
        'controller' => 'gerant',
        'action' => 'dashboard'
    ],

    '/coach/dashboard' => [
        'controller' => 'coach',
        'action' => 'dashboard'
    ],

    '/apprenant/dashboard' => [
        'controller' => 'apprenant',
        'action' => 'dashboard'
    ]


];

return $routes;