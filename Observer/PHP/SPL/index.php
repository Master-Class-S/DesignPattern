<?php

use Masterclass\Designpattern\Observer\PHP\SPL\UserCreator;

require_once __DIR__ . '/../../../vendor/autoload.php';
$observers = require_once './config.php';

$userCreator = new UserCreator();
foreach ($observers as $observer) {
    $userCreator->attach($observer);
}

$userCreator->create();
