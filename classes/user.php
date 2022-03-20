<?php

class User {

    use Address;

    public $name;
    public $lastName;
    protected $email;
    protected $discount = 0;

    public function __construct($name, $lastName, $email){

        $this->name = $name;
        $this->lastname = $lastName;
        $this->setEmail($email);

    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {

        if (strpos($email, '@') !== false && strpos($email, '.') !== false ) {
            $this->email = $email;
        } else {
            echo "indirizzo email non valido!";
        }

    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
    }

}