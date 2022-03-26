<?php

use Masterclass\Designpattern\Observer\PHP\SPL\UserCreator;

require_once __DIR__ . '/../../../vendor/autoload.php';
$observers = require_once './config.php';

$userCreator = new UserCreator(
    is_array($observers) ? $observers : []
);

$userCreator->create(
    'Qamar',
    'HAYAT',
    'qamar.hayat@fakemail.com',
    '0601020304'
);
