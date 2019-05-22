<?php

// class User
// prop: userName, password, email
// behavior: change password



class User 
{
    private $userName;
    private $password; 
    private $email;

    public function __construct($userName, $password, $email)
    {
        $this->userName = $userName;
        $this->password = $password; 
        $this->email = $email;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getPassword()
    {
        return $this->password; 
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function changePassword($userName, $oldPassword, $newPassword)
    {

        $passwordChanged = false;

        if($oldPassword == $this->password && $userName == $this->userName)
        {
            $this->password = $newPassword;
            //update cookie
            $passwordChanged = true; 
        }
    
        return $passwordChanged;
    }
}