<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14\EventListener;

use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserCreateEvent;
use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserDeleteEvent;
use Masterclass\Designpattern\Observer\PHP\PS14\Logger\Logger;

class UserListener implements EventListenerInterface
{
    public static function create(UserCreateEvent $event)
    {
        $logger = new Logger;
        $logger->info($event->getUser()->firstname . ' created !');
    }

    public static function delete(UserDeleteEvent $event)
    {
        $logger = new Logger;
        $logger->warning('USER ' . $event->getUserId() . ' deleted !');
    }
}
