<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi\controller;

use exelixi\view\View;

/**
 * Class Controller
 * @package exelixi\controller
 */
class Controller
{
    private $layout = "application_layout";
    private $controller_name;
    private $model_name;
    private $view;

    public function __construct()
    {
        $this->controller_name = strtolower(get_class($this));
        $this->view = new View($this->controller_name);
        $this->model_name = $this->controller_name;
        $this->view->setLayout($this->layout);

        if (file_exists(ROOT . "app/models/" . $this->model_name . '.php')) {
            require_once ROOT . "app/models/" . $this->model_name . '.php';
        }
    }

    protected function setModelName(string $name): void
    {
        $this->model_name = $name;
        if (file_exists(ROOT . "app/models/" . $this->model_name . '.php')) {
            require_once ROOT . "app/models/" . $this->model_name . '.php';
        }
    }

    /**
     * @return string
     */
    protected function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     */
    protected function setLayout(string $layout): void
    {
        $this->layout = $layout;
        $this->view->setLayout($this->layout);
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controller_name;
    }

    protected function renderView(string $view, array $data = null): void
    {
        $this->view->render($view, $data);
    }

    protected function render(string $view, array $data = null): void
    {
        $this->view->render($view, $data);
    }
}