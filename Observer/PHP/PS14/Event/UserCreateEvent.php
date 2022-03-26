<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14\Event;

use Masterclass\Designpattern\Observer\PHP\PS14\Model\User;

class UserCreateEvent implements EventInterface
{
    public const EVENT_NAME = 'user.create';

    public function __construct(private User $user)
    {
    }

    public function getName(): string
    {
        return self::EVENT_NAME;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
