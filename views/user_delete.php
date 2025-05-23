<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Controller\UserController;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $userController = new UserController();
    $users = $userController->deleteUser($id);

    header('Location: ../index.php');

    exit;

}
?>
