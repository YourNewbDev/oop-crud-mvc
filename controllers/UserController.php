<?php

namespace Controller;

use Models\User;

/**
 * Class UserController
 * 
 * Handles service logic of the application
 * Serves as the middleman between Model and View
 * 
 */

class UserController {

    /**
     * Summary of createUser
     * Creates a new user by passing data to the User model
     * 
     * This method acts as the controller's interface for creating a new user
     * Instantiates the User modal and delegates the creation task to it
     * 
     * @param string $first_name First name of the user to be created
     * @param string $last_name Last name of the user to be created
     * @return bool True on success, False on fail
     */
    public function createUser($first_name, $last_name) {
        $user = new User();
        return $user->create($first_name, $last_name);
    }

    /**
     * Summary of getUsers
     * Reads all the user from the database
     * 
     * This method calls the User model to fetch all user records
     * 
     * @return array Array of user records
     */
    public function getUsers() {
        $user = new User();
        return $user->read();
    }

    /**
     * Summary of updateUser
     * Update the record of the user from the database
     * 
     * This method instructs the User model to update the data from the user with the user id as an identifier
     * 
     * @param string $first_name First name of the user to be updated
     * @param string $last_name Last name of the user to be updated
     * @param int $id key to identify which user is to update
     * @return bool True on success, False on fail
     */
    public function updateUser($first_name, $last_name, $id) {
        $user = new User();
        return $user->update( $first_name, $last_name, $id);
    }

    /**
     * Summary of deleteUser
     * Delete the record of an existing user from the database
     * 
     * This method instructs the User model to delete the user from the database with the user id as an identifier
     * 
     * @param int $id key to identify which user is to delete
     * @return bool True on success, False on fail
     */
    public function deleteUser($id) {
        $user = new User();
        return $user->delete($id);
    }
}