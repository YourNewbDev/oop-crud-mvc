<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Controller\UserController;


// Create instance of UserController Class
$userController = new UserController();
// Retrieve the list of users from the database using getUsers method
$users = $userController->getUsers();

echo "<h1>User List</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Actions</th></tr>";

foreach ($users as $user) {
    echo "<tr>
            <td>{$user['user_id']}</td>
            <td>{$user['first_name']}</td>
            <td>{$user['last_name']}</td>
            <td>
                <a href='views/user_edit.php?id={$user['user_id']}'>Edit</a> |
                <a href='views/user_delete.php?id={$user['user_id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
?>
