<?php
class Person {
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;

    public function __construct($firstName, $lastName, $phoneNumber, $address) {
        $this->firstName = htmlspecialchars($firstName);
        $this->lastName = htmlspecialchars($lastName);
        $this->phoneNumber = htmlspecialchars($phoneNumber);
        $this->address = htmlspecialchars($address);
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getAddress() {
        return $this->address;
    }

    public function displayData() {
        return "
            <div class='result-box'>
                <p>Hi, my name is <strong>" . $this->getFullName() . "</strong></p>
                <p><strong>Phone Number:</strong> " . $this->getPhoneNumber() . "</p>
                <p><strong>Address:</strong> " . $this->getAddress() . "</p>
            </div>
        ";
    }
}
?>