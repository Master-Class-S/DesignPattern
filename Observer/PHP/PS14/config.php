<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14;

use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserCreateEvent;
use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserDeleteEvent;

return [
    UserCreateEvent::EVENT_NAME => [
        'Masterclass\Designpattern\Observer\PHP\PS14\EventListener\UserListener::create',
    ],
    UserDeleteEvent::EVENT_NAME => [    
        'Masterclass\Designpattern\Observer\PHP\PS14\EventListener\UserListener::delete'
    ],
];
