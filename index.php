<?php

session_start();

require_once __DIR__ . "/vendor/autoload.php";

$userController = new \Controller\UserController();

$userController->createUser('Harvin', 'Wage');

$userController->getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'views/user_list.php'; ?>
</body>
</html>