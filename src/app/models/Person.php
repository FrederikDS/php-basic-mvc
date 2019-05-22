<?php

require_once 'ContactDetails.php'; 

class Person
{
    private $firstName;
    private $lastName;
    private $contactDetails; 

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function addContactDetails($phone, $email)
    {
        $this->contactDetails = new ContactDetails($phone, $email); 
    }
}