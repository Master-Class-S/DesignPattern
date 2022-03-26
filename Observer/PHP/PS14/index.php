<?php

use Masterclass\Designpattern\Observer\PHP\PS14\EventDispatcher\EventDispatcher;
use Masterclass\Designpattern\Observer\PHP\PS14\Logger\Logger;
use Masterclass\Designpattern\Observer\PHP\PS14\UserHandler;

require_once __DIR__ . '/../../../vendor/autoload.php';
$config = require_once './config.php';


$eventDispatcher = new EventDispatcher(
    is_array($config) ? $config : []
);


$userHandler = new UserHandler($eventDispatcher);

/**
 * Create
 */
$userHandler->create('Qamar', 'HAYAT');

/**
 * Delete
 */
$userHandler->delete(2);
