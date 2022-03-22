<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use SplSubject;

class Push implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . ': message pushed' . PHP_EOL;
    }
}