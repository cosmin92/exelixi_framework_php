<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi\model;

use exelixi\db\DatabaseConnection;

class Model
{
    protected $db_connection;
    private $table_name;

    public function __construct()
    {
        $this->table_name = strtolower(get_class($this));
        $db = new DatabaseConnection();
        $db->connect();
        $this->db_connection = $db->getConnection();
    }
}