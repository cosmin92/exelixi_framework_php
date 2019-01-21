<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi;

use exelixi\dispatcher\Request;

/**
 * Class Application
 * @package exelixi
 */
class Application
{
    private $dispatcher;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        echo 'New Application was created';
    }
}