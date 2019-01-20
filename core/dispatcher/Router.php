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

    public static function root($controller, $method)
    {
        self::$routes['/'] = array("controller" => $controller, "method" => $method);
    }

    public static function add($url, $controller, $method)
    {
        self::$routes[$url] = array("controller" => $controller, "method" => $method);
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }
}