<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

class TestController extends exelixi\controller\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function test($params){
        echo "<h2>Test action in TestController</h2>";
        var_dump($this->params);
    }

    public function __call($method, $arguments)
    {
        parent::__call($method, $arguments);
    }
}