<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 20/01/2019
 * File: bootstrap.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi;

define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define('WEB_ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));

define('APP_NAME', 'exelixi');

// Environment
define('TEST', 0);
define('PRODUCTION', 1);
define('DEVELOPMENT', 2);

// Request Methods
define('POST', "POST");
define('GET', "GET");
define('PUT', "PUT");
define('PATCH', "PATCH");
define('DELETE', "DELETE");

// Utilities
require_once ROOT . 'core/utilities/util_functions.php';

// Model
require_once ROOT . 'core/model/Model.php';

// View
require_once ROOT . 'core/view/View.php';

// Controller
require_once ROOT . 'core/controller/Controller.php';

// Dispatcher
require_once ROOT . 'core/dispatcher/Router.php';
require_once ROOT . 'core/dispatcher/Request.php';
require_once ROOT . 'core/dispatcher/Dispatcher.php';
require_once ROOT . 'config/routes.php';
require_once ROOT . 'config/init.php';

require_once ROOT . 'core/Application.php';


