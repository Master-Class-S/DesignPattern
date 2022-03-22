<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

class Push implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        echo get_class($subject) . 'message pushed' . PHP_EOL;
    }
}
