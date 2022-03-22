<?php

use Masterclass\Designpattern\Observer\PHP\Custom\UserHandler;

require_once __DIR__ . '/../../../vendor/autoload.php';

$observersMapping = require_once './config.php';

$userHandler = new UserHandler();
foreach ($observersMapping as $key => $observers) {
    foreach ($observers as $observer) {
        $userHandler->attach($observer, $key);
    }
}

/**
 * Create
 */
$userHandler->create();

/**
 * Delete
 */
$userHandler->delete();
