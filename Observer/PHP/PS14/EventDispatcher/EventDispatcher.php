<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14\EventDispatcher;

use Masterclass\Designpattern\Observer\PHP\PS14\EventListener\EventListenerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

class EventDispatcher implements EventDispatcherInterface
{
    private array $listeners = [];

    public function __construct(array $listeners = [])
    {
        $this->addListeners($listeners);
    }

    public function dispatch(object $event)
    {   
        $eventName = $event->getName();
        if (isset($this->listeners[$eventName])) {
            foreach($this->listeners[$eventName] as $listener) {
                call_user_func($listener, $event);
            }
        }
    }

    public function addListener(string $eventName, $listener): void
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function addListeners(array $listeners): void
    {
        foreach ($listeners as $eventName => $listeners) {
            foreach($listeners as $listener) {
                $this->addListener($eventName, $listener);
            }
        }
    }
}
