<?php

namespace Config;

use PDO;

class Database {
    private $host = "localhost";
    private $dbName = "dbcrud";
    private $user = "root";
    private $password = "";
    private $connection;

    public function connect(){
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}",
            $this->user,
            $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

// $db = new Database();
// $con = $db->connect();

// if ($con) {
//     echo "Connected";
// }
// else {
//     echo "Not connected";
// }