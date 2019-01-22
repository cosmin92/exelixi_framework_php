<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */
namespace exelixi\db;

class DatabaseConnection
{
    private $connection;

    public function connect() {
        try {
            $this->connection = new \PDO('mysql:host=' . HOST . '; dbname=' . DB_NAME, USER, PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            echo 'Database Error: ' . $ex->getMessage();
        }
    }

    public function getConnection(): object {
        return $this->connection;
    }
}