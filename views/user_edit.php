<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Controller\UserController;

// Checks if the id has been set 
if (isset($_GET['id'])) {
    // Sanitize the id
    $id = $_GET['id'];

    // Create instance of UserController Class
    $userController = new UserController();
    // Update the information of the user in database using updateUser method
    $users = $userController->updateUser("Krist", "Punzalan", $id);

    header('Location: ../index.php');

    exit;

}
?>
