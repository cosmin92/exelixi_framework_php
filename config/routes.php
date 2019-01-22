<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

use exelixi\dispatcher\Router;

Router::root("home", "home");
Router::add('about', "home", "about");

// ArticleController
Router::add("articles", "ArticleController", "articles", GET);
Router::add("article", "ArticleController", "article", GET);
Router::add("create", "ArticleController", "create", POST);
Router::add("new_article", "ArticleController", "new", GET);
Router::add("update_article", "ArticleController", "update", POST);