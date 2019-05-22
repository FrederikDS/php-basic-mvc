<?php

class ContactDetails
{
    private $phoneNumnber;
    private $email;
    //private $address;

    public function __construct($phoneNumnber, $email)
    {
        $this->phoneNumnber = $phoneNumnber;
        $this->email = $email; 
    }

    public function getPhoneNumber(){
        return $this->phoneNumnber;
    }

    public function getEmail(){
        return $this->email;
    }
}