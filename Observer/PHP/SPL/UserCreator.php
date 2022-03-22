<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

class UserCreator implements \SplSubject
{
    private array $observers = [];

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function create()
    {
        echo 'user created' . PHP_EOL;

        $this->notify();
    }
}
