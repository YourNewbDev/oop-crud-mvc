<?php

namespace Models;

use Config\Database;

class User {
    private $conn;

    public function __construct() { 
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function create($first_name, $last_name) {
        $stmt = $this->conn->prepare("INSERT INTO users (first_name, last_name, created_at)
                                      VALUES (?, ?, NOW())");
        // $user_id = $this->conn->lastInsertId();
        return $stmt->execute([$first_name, $last_name]);
    }

    public function read() {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($first_name, $last_name, $id) {
        $stmt = $this->conn->prepare("UPDATE users SET first_name = ?, last_name = ?
                                     WHERE user_id = ?");
        return $stmt->execute([$first_name, $last_name, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE user_id = ?");
        return $stmt->execute([$id]);
    }
}