<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi\dispatcher;


class Router
{
    private static $routes = array();

    public static function root($controller, $action, $method = null)
    {
        self::$routes['/'] = array("controller" => $controller, "action" => $action, "method" => is_null($method) ? "get" : strtolower($method));
    }

    public static function add($resource, $controller, $action, $method = null)
    {
        self::$routes[strtolower($resource)] = array("controller" => $controller, "action" => $action, "method" => is_null($method) ? "get" : strtolower($method));
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }
}