<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14;

use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserCreateEvent;
use Masterclass\Designpattern\Observer\PHP\PS14\Event\UserDeleteEvent;
use Masterclass\Designpattern\Observer\PHP\PS14\Model\User;
use Psr\EventDispatcher\EventDispatcherInterface;

class UserHandler
{   
    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
    }

    public function create(string $lastname, string $firstname): User
    {
        $user = new User();
        $user->id = uniqid();
        $user->lastname = $lastname;
        $user->firstname = $firstname;

        $this->eventDispatcher->dispatch(new UserCreateEvent($user));

        return $user;
    }

    public function delete(int $id): bool
    {
        $user = new User();
        $user->id = $id;
        $user->deletedAt = new \DateTime();

        $this->eventDispatcher->dispatch(new UserDeleteEvent($id));

        return true;
    }
}
