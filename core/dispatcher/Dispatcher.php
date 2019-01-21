<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 21/01/2019
 * Time: 12:46
 */

namespace exelixi\dispatcher;

use function exelixi\out;
use function exelixi\out_r;

/**
 * Class Dispatcher
 * @package exelixi\dispatcher
 */
class Dispatcher
{
    /**
     * @var Request
     */
    private $request;

    private $controller;
    private $action;
    private $params;

    /**
     * Dispatcher constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }

    /**
     *
     */
    public function dispatch()
    {
        $params = $this->request->getParams();
        if ((count($params) == 1) && $params[0] == '') {
            $this->controller = Router::getRoutes()['/']['controller'];
            $this->action = Router::getRoutes()['/']['action'];
            $this->params = [];
            $this->loadResource();
        } else {
            $resource = "";
            $index = 0;
            foreach ($params as $param) {
                $resource = $resource . '/' . $param;
                unset($params[$index]);
                $index = $index + 1;
                $resource = ltrim($resource, '/');
                if (array_key_exists($resource, Router::getRoutes())) {
                    if (Router::getRoutes()[$resource]['method'] == strtolower($this->request->getMethod())) {
                        break;
                    }
                }
            }

            if (!array_key_exists($resource, Router::getRoutes())) {
                //echo "<h1 style='color: red; text-align: center;'>Route undefined!</h1>";
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
                exit();
                // return;
            }

            $this->controller = Router::getRoutes()[$resource]['controller'];
            $this->action = Router::getRoutes()[$resource]['action'];
            $this->params = count(array_values($params)) > 0 ? array_values($params) : [];
            var_dump($this->params);
            $this->loadResource();
        }

    }

    private function loadResource()
    {
        $controller_path = ROOT . "app/controllers/";
        if(!file_exists($controller_path . $this->controller . '.php')){
            //echo "<h1 style='color: red; text-align: center;'>Controller not found!</h1>";
            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
            exit();
            //return;
        }

        require_once $controller_path . $this->controller . '.php';
        $this->controller = new $this->controller;

        if(!method_exists($this->controller, $this->action)){
            //echo "<h1 style='color: red; text-align: center;'>Action not found!</h1>";
            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
            exit();
            //return;
        }

        call_user_func_array([$this->controller, $this->action], [$this->params]);
    }
}