<?php

namespace Config;

use PDO;

/**
 * Class Database
 * Handles database connection for the app.
 */

class Database {
    /**
     * Storing Database Access Information
     * @var string $host Server host
     * 
     * @var string $dbName Database name
     * 
     * @var string $user Server username
     * 
     * @var string $password Server password
     * 
     * @var PDO $connection PDO connection instance
     */
    private $host = "localhost";
    private $dbName = "dbcrud";
    private $user = "root";
    private $password = "";
    private $connection;

    /**
     * Creates a connection to the database.
     * @return PDO Database connection instance
     */
    public function connect(){
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}",
            $this->user,
            $this->password);

            // Sets error mode for PDO connection to prevent seeing easy to miss fails
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;
        } catch (\PDOException $e) {
            // Stops execution and display error
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