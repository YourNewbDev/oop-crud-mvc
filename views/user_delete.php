<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Controller\UserController;

// Checks if the id has been set 
if (isset($_GET['id'])) {
    // Sanitizee the id
    $id = $_GET['id'];

    // Create instance of UserController 
    $userController = new UserController();
    // Delete the user from the database using deleteUser method
    $users = $userController->deleteUser($id);

    header('Location: ../index.php');

    exit;

}
?>
