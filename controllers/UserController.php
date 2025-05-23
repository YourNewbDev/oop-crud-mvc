<?php

namespace Controller;

use Models\User;

class UserController {

    public function createUser($first_name, $last_name) {
        $user = new User();
        return $user->create($first_name, $last_name);
    }

    public function getUsers() {
        $user = new User();
        return $user->read();
    }

    public function updateUser($first_name, $last_name, $id) {
        $user = new User();
        return $user->update( $first_name, $last_name, $id);
    }

    public function deleteUser($id) {
        $user = new User();
        return $user->delete($id);
    }
}