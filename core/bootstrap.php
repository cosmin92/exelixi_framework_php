<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 20/01/2019
 * File: bootstrap.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi;

define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define('APP_NAME', 'exelixi');

// Dispatcher
require_once ROOT . 'core/dispatcher/Router.php';
require_once ROOT . 'config/routes.php';

require_once ROOT . 'core/Application.php';


