<?php

require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/creditCard.php';


$myUser = new User('matteo', 'rossi', 'info@matteorossi.it');

$myCreditCard = new CreditCard();

$myCreditCard->setExpirationMonth('05');
$myCreditCard->setExpirationYear('22');
$myCreditCard->setCvv('123');
$myCreditCard->setNumber('42424242424242424');
$myCreditCard->owner = "Matteo Rossi";

try {
    $myCreditCard->isExpired();
    $myUser->setCreditCard($myCreditCard);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $myUser;