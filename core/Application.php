<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi;

use exelixi\dispatcher\Dispatcher;

/**
 * Class Application
 * @package exelixi
 */
class Application
{
    /**
     * @var Dispatcher
     */
    private $dispatcher;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
        $this->dispatcher->dispatch();
    }
}