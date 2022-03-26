<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14\Event;

use Masterclass\Designpattern\Observer\PHP\PS14\Model\User;

class UserDeleteEvent implements EventInterface
{
    public const EVENT_NAME = 'user.delete';

    public function __construct(private int $userId)
    {
    }

    public function getName(): string
    {
        return self::EVENT_NAME;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
