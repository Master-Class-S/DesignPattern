<?php

namespace Masterclass\Designpattern\Observer\PHP\PS14\Logger;

use Psr\Log\LoggerTrait;
use Stringable;

class Logger
{
    use LoggerTrait;

    public function log($level, string|Stringable $message, array $context = []): void
    {
        echo "$level : $message" . PHP_EOL;
    }
}
