<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

class UserHandler implements SubjectInterface
{
    public const EVENT_CREATE = 'create';
    public const EVENT_DELETE = 'delete';

    private $observers = [];

    public function create()
    {
        echo 'user created !' . PHP_EOL;
        $this->notify(self::EVENT_CREATE);
    }

    public function delete()
    {
        echo 'user deleted!' . PHP_EOL;
        $this->notify(self::EVENT_DELETE);
    }

    public function attach(ObserverInterface $observer, string $event)
    {
        $this->observers[$event][] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(string $event)
    {
        if (isset($this->observers[$event])) {
            foreach ($this->observers[$event] as $observer) {
                $observer->update($this);
            }
        }
    }
}
