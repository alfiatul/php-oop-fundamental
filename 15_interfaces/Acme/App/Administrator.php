<?php

namespace Acme\App;

/**
 * This class extends Acme\App\User
 */

class Administrator extends User {

    public function __construct(){
        $this->isAdmin = true;
    }
    /**
     * Log in a user
     * @return string
     */
    public function login(){

        // Login in our member using the logic in the parent class.
        $message = parent::login();

        // Add some administrator-spcific logic
        return $message . ' ... log this action in an administrator\'s table';
    }

    /**
     * this method is for Administrators only
     */
    public function reportForDuty()
    {
        // Do stuff ..
    }
}