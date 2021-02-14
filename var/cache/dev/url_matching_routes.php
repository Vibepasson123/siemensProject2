<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\UserController::createUser'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|user/([^/]++)(*:63)'
                    .'|delete/([^/]++)(*:85)'
                    .'|edit/([^/]++)(*:105)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        105 => [
            [['_route' => 'edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
