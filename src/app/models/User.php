<?php

// require_once './Person.php'; 

class User //extends Person 
{
    private $userName;
    private $password; 

    public function __construct($userName, $password)// $firstName, $lastName)
    {
        // __parent::__construct($firstName, $lastName); 

        $this->userName = $userName;
        $this->password = $password; 
    }

    public function getUserName(){
        return $this->userName;
    }

    public function getPassword(){
        return $this->password; 
    }
}