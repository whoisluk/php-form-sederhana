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

    public function displayData() {
        return "
            <strong>Nama:</strong> {$this->firstName} {$this->lastName}<br>
            <strong>No HP:</strong> {$this->phoneNumber}<br>
            <strong>Alamat:</strong> {$this->address}
        ";
    }
}