<?php

namespace Models;

use Config\Database;

/**
 * Class User
 * Manages database operation for the 'users' table
 */
class User {
    private $conn;

    /**
     * Summary of __construct
     * User contructor and establishes connection to the database.
     */
    public function __construct() { 
        $database = new Database();
        $this->conn = $database->connect();
    }

    /**
     * Summary of create
     * Creates a new user in the database
     * @param mixed $first_name
     * @param mixed $last_name
     * @return bool True on success, False on fail
     */
    public function create($first_name, $last_name) {
        $stmt = $this->conn->prepare("INSERT INTO users (first_name, last_name, created_at)
                                      VALUES (?, ?, NOW())");
        // $user_id = $this->conn->lastInsertId();
        return $stmt->execute([$first_name, $last_name]);
    }

    /**
     * Summary of read
     * Displays all user in the database
     * @return array List of user
     */
    public function read() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Summary of update
     * Updates full or partial data of the user by user id
     * @param mixed $first_name
     * @param mixed $last_name
     * @param mixed $id
     * @return bool True on success, False on fail
     */
    public function update($first_name, $last_name, $id) {
        $stmt = $this->conn->prepare("UPDATE users SET first_name = ?, last_name = ?
                                     WHERE user_id = ?");
        return $stmt->execute([$first_name, $last_name, $id]);
    }

    /**
     * Summary of delete
     * Deletes the user in the database by user id
     * @param mixed $id
     * @return bool True on success, False on fail
     */
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE user_id = ?");
        return $stmt->execute([$id]);
    }
}