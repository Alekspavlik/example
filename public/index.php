<?php

require_once "../vendor/autoload.php";

use \App\ {
    Currency,
    Money
};

$usd = new Currency("USD");
$eur = new Currency("EUR");

$money1 = new Money(50, $usd);
$money2 = new Money(500, $usd);

if ($money1->equals($money2)) {
    echo "All right";
}

$money3 = $money1->add($money2);

echo "<pre>";
var_dump($money3);
echo "<pre>";
