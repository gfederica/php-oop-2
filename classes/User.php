<?php
class User {
    private $firstname;
    private $lastname;
    protected $email;

    function __construct($firstname, $lastname, $email) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
    
    public function getFirstName() {
        return $this->firstname;
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }
}