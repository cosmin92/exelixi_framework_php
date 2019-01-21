<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi\view;


class View
{
    private $layout;
    private $controller_name;

    public function __construct(string $controller_name)
    {
        $this->controller_name = $controller_name;
    }

    public function render($view, array $data = null)
    {
        if (!is_null($data)) {
            extract($data);
        }

        $view_path = ROOT . "app/views/" . $this->controller_name . "/";

        if (!file_exists($view_path . $view . '.php')) {
            echo "<h1 style='color: red; text-align: center;'>View not found!</h1>";
            //header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
            //exit();
            return;
        }

        ob_start();
        require_once $view_path . $view . '.php';
        $yield = ob_get_clean();

        $layout_path = ROOT . "app/views/layouts/";
        if(!file_exists($layout_path . $this->layout . '.php')){
            echo "<h1 style='color: red; text-align: center;'>Missed Layout!</h1>";
            //header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
            //exit();
            return;
        }
        require_once $layout_path . $this->layout . '.php';
    }

    /**
     * @param mixed $layout
     */
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
}