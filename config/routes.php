<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

use exelixi\dispatcher\Router;

 Router::root("StaticPages", "Home");
 Router::add("About","StaticPages", "Home", "POST");
