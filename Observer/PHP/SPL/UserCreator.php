<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use Masterclass\Designpattern\Observer\PHP\SPL\Model\User;

class UserCreator implements \SplSubject
{
    private array $observers = [];

    private User $user;

    public function __construct(array $observers = [])
    {
        $this->attachObservers($observers);
    }

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

    public function attachObservers(array $observers): void
    {
        foreach ($observers as $observer) {
            $this->attach($observer);
        }
    }

    public function create(string $firstname, string $lastname, string $email, string $phone): User
    {
        $user = new User();
        $user->id = uniqid();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->phone = $phone;

        $this->user = $user;

        $this->notify();

        return $user;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }
}
