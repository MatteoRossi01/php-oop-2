<?php 

require_once __DIR__ . '/user.php';

class UserRegistered extends User {

    private $discount = 20;

    public function setDiscount($number) {
        if ($number >=0 && $number <= 100) {
            $this->discount = $number;
        }
    }
}

