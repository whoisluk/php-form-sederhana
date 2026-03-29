<?php

class Person {
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $address;

    public function __construct($firstName, $lastName, $phoneNumber, $address) {
        $this->firstName = htmlspecialchars($firstName);
        $this->lastName = htmlspecialchars($lastName);
        $this->phoneNumber = htmlspecialchars($phoneNumber);
        $this->address = htmlspecialchars($address);
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function displayData() {
        return "
            <strong>Nama:</strong> " . $this->getFullName() . "<br>
            <strong>No HP:</strong> " . $this->phoneNumber . "<br>
            <strong>Alamat:</strong> " . $this->address . "
        ";
    }
}